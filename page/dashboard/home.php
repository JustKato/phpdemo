<?php include "./headers/header.php" ?>



<?php include "./headers/footer.php" ?>
<script>

    switchTab(`home`);

    function switchTab(tab = 'home') {

        switch (tab) {
            case 'charts':
                $.ajax({
                    url:  `/page/dashboard/pages/charts`,
                    type: `get`,
                    success: msg => {
                        $(`.main-wrapper`).html(msg);
                    },
                    error: (msg) => {
                        swal.fire({
                            icon : 'error',
                            title: "Failed To load page",
                            // text : msg.message
                        });
                    }
                })
                break;
        
            case 'home':
                $.ajax({
                    url:  `/page/dashboard/pages/home`,
                    type: `get`,
                    success: msg => {
                        $(`.main-wrapper`).html(msg);
                    },
                    error: (msg) => {
                        swal.fire({
                            icon : 'error',
                            title: "Failed To load page",
                            // text : msg.message
                        });
                    }
                })
                break;
        
        
            case 'logs':
                $.ajax({
                    url:  `/page/dashboard/pages/logs`,
                    type: `get`,
                    success: msg => {
                        $(`.main-wrapper`).html(msg);
                    },
                    error: (msg) => {
                        swal.fire({
                            icon : 'error',
                            title: "Failed To load page",
                            // text : msg.message
                        });
                    }
                })
                break;
                
            case 'logout':
                swal.fire({
                    icon: 'question',
                    title: `Logout`,
                    text: `Are you sure you want to Log Out?`,
                    showCancelButton: true
                }).then(res => {
                    if ( res.value ) {
                        window.location.href = `/api/logout`;
                    }
                })
                break;
        
        }

    }

</script>