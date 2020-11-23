<?php $this->layout = false; ?>

<?= $this->Html->docType() ?>
<html>
    <!-- copyright 2019; Designed By Repo Solutions , 0702-026-358, 0704-676-296, http://www.eripplesolutions.com -->
    <head>
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->element('css') ?>
    </head>
    <body class="login no-js">
        <div class="row text-center"><?= $this->Flash->render() ?></div>

        <!-- Page content -->

        <?= $this->fetch('content') ?>
        <!-- End page content -->

        <?= $this->element('js') ?>
        <script>
            setInterval(getTime, 1000);
            var logoutInt = setTimer();

            function setTimer() {
                logoutInt = setInterval(logout, 1800000);//30 min
                //logoutInt = setInterval(logout, 240000);//4 min
                return logoutInt;
            }
            function getTime() {
                var date = new Date();
                var div = document.getElementById("time");
                if (div !== null) {
                    div.innerHTML = date.toLocaleTimeString();
                }
            }
            function isLoggedOut() {
                return window.location.pathname === '/besfoundation/';
            }


            function logout() {
                var link = '<?= \Cake\Routing\Router::url(['controller' => 'users', 'action' => 'logout']) ?>';
                if (!isLoggedOut()) {
                    window.location = link;
                    loggedOut = true;
                }
            }
            
            document.body.onmousemove = function () {
                if (!isLoggedOut()) {
                    clearInterval(logoutInt);
                    setTimer();
                }
            };
        </script>
    </body>
</html>

