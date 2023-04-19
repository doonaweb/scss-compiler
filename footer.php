<?php
//By https://Doonaweb.ir

?>

<?php load_scripts(); ?>

<script>
    // this code compile SCSS and Show Message and Reload page after 3000 ms
    document.querySelector('#compile-btn').addEventListener('click', function () {
        $.ajax({
            url: 'scss-compiler.php',
            type: 'POST',
            data: { action: 'compile' },
            success: function (response) {
                // alert(response);
                const toastLiveExample = document.getElementById('liveToast')
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                toastBootstrap.show()
                setTimeout(function () {
                    location.reload();
                }, 3000);


            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
    // Triger Button For Run Sass
    document.getElementById('compile-btn').addEventListener('click', function () {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'scss-compiler.php', true);
        xhr.send();
    });
</script>

</body>

</html>