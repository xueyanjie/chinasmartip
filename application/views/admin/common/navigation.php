
<!--<div class="row">-->
<!--  <h1>专题抽奖管理系统<small>v1.0</small></h1>-->
<!--</div>-->


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Chinasmartip</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <?php
                            if (isset($_SESSION['name'])) {
                                echo '你好,' . $_SESSION['name'];
                            }
                        ?>
                    </a>
                </li>
                <li>
<!--                    <a target="_blank" href="http://wiki.pinyin.sogou-inc.com/index.php?title=抽奖接口文档">接口wiki</a>-->
                </li>
                <li>
<!--                    <a target="_blank" href="http://note.youdao.com/share/?id=bc049f9806757b52e15026fb25902d78&type=note#/">服务接入指南</a>-->
                </li>
            </ul>
            <!--
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
            -->
        </div>
    </div>
</nav>
