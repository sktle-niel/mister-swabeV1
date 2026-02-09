<?php
require_once '../../config/connection.php';

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="sales_report_' . date('Y-m-d') . '.pdf"');

// Include TCPDF library (assuming it's available, or you can install it)
require_once '../vendor/tecnickcom/tcpdf/tcpdf.php';

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Swabe Collection');
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('Sales Report - ' . date('Y-m-d'));
$pdf->SetSubject('Daily Sales Report');

// Remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', 'B', 20);

// Title
$pdf->Cell(0, 15, 'Sales Report - ' . date('Y-m-d'), 0, 1, 'C');
$pdf->Ln(10);

// Query today's sales
$query = "SELECT s.id, s.total_amount, s.payment_method, s.created_at,
                 GROUP_CONCAT(CONCAT(COALESCE(i.name, 'Unknown Product'), ' (Qty: ', si.quantity, ')') SEPARATOR ', ') as products
          FROM sales s
          LEFT JOIN sale_items si ON s.id = si.sale_id
          LEFT JOIN inventory i ON si.product_id = i.id
          WHERE DATE(s.created_at) = CURDATE()
          GROUP BY s.id
          ORDER BY s.created_at DESC";

$result = $conn->query($query);
$sales = $result->fetch_all(MYSQLI_ASSOC);

// Calculate total
$totalAmount = 0;
foreach ($sales as $sale) {
    $totalAmount += $sale['total_amount'];
}

// Summary
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, 'Summary', 0, 1);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 8, 'Total Sales Today: ' . count($sales), 0, 1);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(0, 0, 0); // Black color
$pdf->Cell(0, 8, 'Total Revenue: ₱' . number_format($totalAmount, 2), 0, 1);
$pdf->SetTextColor(0, 0, 0); // Reset to black
$pdf->Ln(10);

// Sales details
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, 'Sales Details', 0, 1);
$pdf->Ln(5);

if (count($sales) > 0) {
    foreach ($sales as $sale) {
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->Cell(0, 8, 'Sale ID: ' . $sale['id'], 0, 1);
        $pdf->SetFont('helvetica', '', 10);
        $pdf->Cell(0, 6, 'Time: ' . date('H:i:s', strtotime($sale['created_at'])), 0, 1);
        $pdf->Cell(0, 6, 'Payment: ' . $sale['payment_method'], 0, 1);
        $pdf->Cell(0, 6, 'Products: ' . $sale['products'], 0, 1);
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->SetTextColor(0, 0, 0); // Black color for amount
        $pdf->Cell(0, 6, 'Amount: ₱' . number_format($sale['total_amount'], 2), 0, 1);
        $pdf->SetTextColor(0, 0, 0); // Reset to black
        $pdf->Ln(5);
    }
} else {
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, 'No sales recorded for today.', 0, 1);
}

// Output the PDF
$pdf->Output('sales_report_' . date('Y-m-d') . '.pdf', 'D');
?>
