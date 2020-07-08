<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <link href="<?php echo HOST;?>assets/css/register.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" id="fullname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="USERNAME" name="username" id="username">
                            <div id="alert_username"></div>

                        </div>

                        <div class="row row-space">
                            <div class="input-group">
                                <input class="input--style-1" type="password" placeholder="PASSWORD" name="password" id="password">
                            </div>
                            <div class="input-group">
                                <input class="input--style-1" type="password" placeholder="CONFIRM PASSWORD" id="c_password" name="c_password">
                                <div id="alert_password"></div>

                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">    
                                <input class="input--style-1" type="email" placeholder="EMAIL" name="email" id="email">
                                <div id="alert_email"></div>
                            </div>
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="PHONE" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div >
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" id="birthday" placeholder="BIRTHDAY" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                                
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sex" id="gender">
                                    <option disabled="disabled" selected="selected" value="n">Giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                                
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="address" name="address" id="address">
                            <div id="alert_address"></div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="<?php echo HOST;?>assets/js/register.js"></script>
</body>
</html>
