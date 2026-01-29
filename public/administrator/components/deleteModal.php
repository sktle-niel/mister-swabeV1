<?php
// Default values for the delete modal
$modalId = $modalId ?? 'deleteModal';
$title = $title ?? 'Delete Item';
$message = $message ?? 'Are you sure you want to delete this item? This action cannot be undone.';
$cancelText = $cancelText ?? 'Cancel';
$confirmText = $confirmText ?? 'Delete';
$confirmFunction = $confirmFunction ?? 'confirmDelete';
$closeFunction = $closeFunction ?? 'closeDeleteModal';
?>

<!-- Delete Confirmation Modal -->
<div class="modal-overlay" id="<?php echo $modalId; ?>Overlay" onclick="<?php echo $closeFunction; ?>OnOverlay(event)">
    <div class="modal-content" style="max-width: 500px;">
        <button class="close-btn" onclick="<?php echo $closeFunction; ?>()">×</button>

        <div class="modal-inner">
            <div style="grid-column: span 2; text-align: center; margin-bottom: 20px;">
                <div style="font-size: 48px; color: #ef4444; margin-bottom: 15px;">⚠️</div>
                <h2 style="margin-bottom: 10px;"><?php echo $title; ?></h2>
                <p style="color: var(--text-secondary); line-height: 1.5; font-size: 14px;">
                    <?php echo $message; ?>
                </p>
            </div>

            <div style="grid-column: span 2; display: flex; gap: 10px; justify-content: flex-end;">
                <button type="button" onclick="<?php echo $closeFunction; ?>()" style="padding: 12px 24px; background: #f5f5f5; border: 1px solid #e0e0e0; border-radius: 6px; cursor: pointer;"><?php echo $cancelText; ?></button>
                <button type="button" onclick="<?php echo $confirmFunction; ?>()" style="padding: 12px 24px; background: #ef4444; color: white; border: none; border-radius: 6px; cursor: pointer;"><?php echo $confirmText; ?></button>
            </div>
        </div>
    </div>
</div>

<script>
// Reusable delete modal functions
function <?php echo $closeFunction; ?>() {
    document.getElementById("<?php echo $modalId; ?>Overlay").style.display = "none";
    if (typeof window.categoryToDelete !== 'undefined') {
        window.categoryToDelete = null;
    }
}

function <?php echo $closeFunction; ?>OnOverlay(event) {
    if (event.target === document.getElementById("<?php echo $modalId; ?>Overlay")) {
        <?php echo $closeFunction; ?>();
    }
}

function <?php echo $confirmFunction; ?>() {
    // This function should be overridden by the including page
    console.log('Confirm delete function called');
}
</script>
