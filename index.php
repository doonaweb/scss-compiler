<?php
//By https://Doonaweb.ir
// Load Functions.php File
require_once('functions.php');
// Load header.php File
get_header();
?>
<!-- Button For Run Sass -->
<button id="compile-btn" type="button" class="btn btn-primary">کامپایل کردن SCSS</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                کامپایل با موفقیت انجام شد.
            </div>
            <button type="button" class="btn-close btn-close-white my-auto me-auto pe-3" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
<?php
// Load footer.php File
get_footer();
?>