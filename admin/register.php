<?php
include 'common.php';

if ($user->hasLogin() || !$options->allowRegister) {
    $response->redirect($options->siteUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
$rememberMail = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_mail'));
Typecho_Cookie::delete('__typecho_remember_name');
Typecho_Cookie::delete('__typecho_remember_mail');

$bodyClass = 'body-100';

include 'header.php';
?>
<div class="typecho-login-wrap-build-KK">
    <div class="typecho-login-build-KK">
    <section>
        <!-- 背景颜色 -->
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <!-- 背景圆 -->
            <div class="circle" style="--x:0"></div>
            <div class="circle" style="--x:1"></div>
            <div class="circle" style="--x:2"></div>
            <div class="circle" style="--x:3"></div>
            <div class="circle" style="--x:4"></div>
            <!-- 登录框 -->
            <div class="container">
                <div class="form">
                    <div class="text">
                    <h2>注册打工人</h2>
                    </div>
                    <form action="<?php $options->registerAction(); ?>" method="post" name="register" role="form">
                        <div class="inputBox">
                            <input type="text" id="name" name="name" placeholder="<?php _e('尊姓大名'); ?>" value="<?php echo $rememberName; ?>" autofocus />
                        </div>
                        <div class="inputBox">
                            <input type="email" id="mail" name="mail" placeholder="<?php _e('Email'); ?>" value="<?php echo $rememberMail; ?>" />
                        </div>
                        <div style="width:100%;" >
                            <div class="inputBox">
                                <input type="submit" value="注册">
                            </div>
                        </div>
                        <div class="text">
                            <p class="forget" style="display: inline;">
                                <a href="<?php $options->siteUrl(); ?>">
                                    回人间
                                </a>
                            </p>
                            <?php if($options->allowRegister): ?>
                            <a style="display: inline;color: aliceblue;"> - </a>
                            <p class="forget" style="display: inline;">
                                <a href="<?php $options->adminUrl('login.php'); ?>">
                                    去打工
                                </a>
                            </p>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>

<style> 
* {
    margin: 0;padding: 0;box-sizing: border-box;
}
section {
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f1f4f9, #dff1ff);}
section .color {
    position: absolute;
    filter: blur(200px);
}
section .color:nth-child(1) {
top: -350px;
width: 600px;
height: 600px;
background: #ff359b;
}
section .color:nth-child(2) {
    bottom: -150px;
    left: 100px;
    width: 500px;
    height: 500px;
    background: #fffd87;
}
section .color:nth-child(3) {
    bottom: 50px;
    right: 100px;
    width: 500px;
    height: 500px;
    background: #00d2ff;
}
.box {
    position: relative;
}
.box .circle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    filter: hue-rotate(calc(var(--x) * 70deg));
    animation: animate 10s linear infinite;
    animation-delay: calc(var(--x) * -1s);
}
@keyframes animate {
    0%, 100%, {
        transform: translateY(-50px);
    }
    50% {
        transform: translateY(50px);
    }
}
.box .circle:nth-child(1) {
    top: -50px;
    right: -60px;
    width: 100px;
    height: 100px;
}
.box .circle:nth-child(2) {
    top: 150px;
    left: -115px;
    width: 120px;
    height: 120px;
    z-index: 2;
}
.box .circle:nth-child(3) {
    bottom: 50px;
    right: -60px;
    width: 80px;
    height: 80px;
    z-index: 2;
}
.box .circle:nth-child(4) {
    bottom: -80px;
    left: 100px;
    width: 60px;
    height: 60px;
}
.box .circle:nth-child(5) {
    top: -80px;
    left: 140px;
    width: 60px;
    height: 60px;
}
.container {
    position: relative;
    width: 400px;
    border-radius: 30%;
    min-height: 400px;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.form {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 50px;
}
.form h2 {
    position: relative;
    color: #fff;
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 5px;
    margin-bottom: 30px;
    cursor: pointer;
}
.form h2::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 0px;
    height: 3px;
    background: #fff;
    transition: 0.5s;
}
.form h2:hover:before {
    width: 100%;
}
.text{
    text-align:center;
}
.form .inputBox {
    width: 100%;
    margin-top: 20px;
}
.form .inputBox input {
    width: 100%;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2);
    outline: none;
    border: none;
    border-radius: 30px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}
.form .inputBox input::placeholder {
    color: #fff;
}
.form .inputBox input[type="submit"] {
    background: #fff;
    color: #666;
    max-width: 100%;
    margin-bottom: 20px;
    font-weight: 600;
    cursor: pointer;
}
.forget {
    margin-top: 6px;
    color: #fff;
    letter-spacing: 1px;
}
.forget a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
</style>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
<?php
include 'footer.php';
?>