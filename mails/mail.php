<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-115740420-2');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function myFunction() {
            window.location.reload(false);
        }
    </script>

    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "passwd";
    $dbname = "skat";
    $databaseselection = $_GET["id"];
    $bFirstRun = true;

    if ($bFirstRun) {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_set_charset($conn, "utf8");

        $sql = "SELECT * FROM projects where id = 44";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $id = $row['id'];
            $desc = $row['descr'];
            $requestor = $row['requestor'];
            $evaldesc = $row['evaldesc'];
            $evalself = $row['evalself'];
            $fagomr = $row['fagomr'];
            $var1dev = $row['var1dev'];
            $var2dev = $row['var2dev'];
            $var3dev = $row['var3dev'];
            $var4dev = $row['var4dev'];
            $var1pro = $row['var1pro'];
            $var2pro = $row['var2pro'];
            $var3pro = $row['var3pro'];
            $var4pro = $row['var4pro'];
            $var1lev = $row['var1lev'];
            $var2lev = $row['var2lev'];
            $var3lev = $row['var3lev'];
            $scoredev = $row['scoredev'];
            $scorepro = $row['scorepro'];
            $scorelev = $row['scorelev'];
            $score = $row['score'];
            $dok1 = $row['dok1'];
            $dok2 = $row['dok2'];
            $dok3 = $row['dok3'];
            $dok4 = $row['dok4'];
        }

        $conn->close();
        $bFirstRun = false;
    }

    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns:v="urn:schemas-microsoft-com:vml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <meta name="viewport" content="width=600,initial-scale = 2.3,user-scalable=no">
        <!--[if !mso]><!-- -->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel="stylesheet">
        <!-- <![endif]-->


        <style type="text/css">
            body {
                width: 100%;
                background-color: #ffffff;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                mso-margin-top-alt: 0px;
                mso-margin-bottom-alt: 0px;
                mso-padding-alt: 0px 0px 0px 0px;
            }

            p,
            h1,
            h2,
            h3,
            h4 {
                margin-top: 0;
                margin-bottom: 0;
                padding-top: 0;
                padding-bottom: 0;
            }

            span.preheader {
                display: none;
                font-size: 1px;
            }

            html {
                width: 100%;
            }

            table {
                font-size: 14px;
                border: 0;
            }

            /* ----------- responsivity ----------- */

            @media only screen and (max-width: 640px) {

                /*------ top header ------ */
                .main-header {
                    font-size: 20px !important;
                }

                .main-section-header {
                    font-size: 28px !important;
                }

                .show {
                    display: block !important;
                }

                .hide {
                    display: none !important;
                }

                .align-center {
                    text-align: center !important;
                }

                .no-bg {
                    background: none !important;
                }

                /*----- main image -------*/
                .main-image img {
                    width: 440px !important;
                    height: auto !important;
                }

                /* ====== divider ====== */
                .divider img {
                    width: 440px !important;
                }

                /*-------- container --------*/
                .container590 {
                    width: 440px !important;
                }

                .container580 {
                    width: 400px !important;
                }

                .main-button {
                    width: 220px !important;
                }

                /*-------- secions ----------*/
                .section-img img {
                    width: 320px !important;
                    height: auto !important;
                }

                .team-img img {
                    width: 100% !important;
                    height: auto !important;
                }
            }

            @media only screen and (max-width: 479px) {

                /*------ top header ------ */
                .main-header {
                    font-size: 18px !important;
                }

                .main-section-header {
                    font-size: 26px !important;
                }

                /* ====== divider ====== */
                .divider img {
                    width: 280px !important;
                }

                /*-------- container --------*/
                .container590 {
                    width: 280px !important;
                }

                .container590 {
                    width: 280px !important;
                }

                .container580 {
                    width: 260px !important;
                }

                /*-------- secions ----------*/
                .section-img img {
                    width: 280px !important;
                    height: auto !important;
                }
            }
        </style>
    </head>


<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <!-- pre-header -->
    <table style="display:none!important;">
        <tr>
            <td>
                <div style="overflow:hidden;display:none;font-size:1px;color:#ffffff;line-height:1px;font-family:Arial;maxheight:0px;max-width:0px;opacity:0;">
                    Pre-header for the newsletter template
                </div>
            </td>
        </tr>
    </table>
    <!-- pre-header end -->
    <!-- header -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">

        <tr>
            <td align="center">
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                    <tr>
                        <td align="center">

                            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                                <tr>
                                    <td align="center" height="70" style="height:70px;">
                                    </td>
                                </tr>

                                <tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
    <!-- end header -->

    <!-- big image section -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">

        <tr>
            <td align="center">
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                    <tr>
                        <h2> Evaluering af automatiserings-projekt </h2>
                        <td align="center" class="section-img">
                        </td>
                    </tr>
                    <tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;" class="main-header">


                            <div style="line-height: 35px">


                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="center">
                            <table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                                <tr>
                                    <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="center">
                            <table border="0" width="400" align="center" cellpadding="0" cellspacing="0" class="container590">
                                <tr>
                                    <td align="center" style="color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;">


                                        <div style="line-height: 24px">

                                            Du har fået denne mail da du er platformsejer. <br /> Du er blevet bedt om at svare på et nystillet automatiserings-projekt.
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                    </tr>

                    <tr>
                        <td align="center">
                        </td>
                    </tr>


                </table>

            </td>
        </tr>

        <tr class="hide">
            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
        </tr>
        <tr>
            <td height="40" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
        </tr>

    </table>
    <!-- end section -->

    <!--  50% image -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">
        <tr>
            <td align="center">
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                    <tr>
                        <td>
                            <div style="line-height: 35px">

                                <h4><?php echo $name ?></h4>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height="15" style="font-size: 16px; line-height: 16px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="left">
                            <table border="0" align="left" cellpadding="0" cellspacing="0" class="container590">
                                <tr>
                                    <td align="center">
                                        <table align="center" width="40" border="0" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                                            <tr>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                    </tr>

                    <tr>
                        <td align="left" style="color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;" class="align-center">


                            <div style="line-height: 24px">

                                Beskrivelse: <?php echo $desc ?>
                                <div style="line-height: 24px">
                    <tr>
                        <td height="25" style="font-size: 26px; line-height: 26px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="left">
                            <table border="0" align="left" cellpadding="0" cellspacing="0" class="container590">
                                <tr>
                                    <td align="center">
                                        <table align="center" width="40" border="0" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                                            <tr>
                                                <td height="2" style="font-size: 2px; line-height: 2px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height="15" style="font-size: 12px; line-height: 12px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="left" style="color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;" class="align-center">

                            Projektet er blevet stillet af <?php echo $requestor ?> fra fagområdet ved navn <?php echo $fagomr ?>. <br /><br />
                            De har givet deres egenvurdering karakteren <?php echo $evalself ?> med følgende begrundelse
                            "<?php echo $evaldesc ?>"

                            <br /><br />
                            <hr />
                            <br />
                            <p> Kan denne robot få lov til at køre på din platform? </p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok1" type="radio" id="dok11" value="Ja">
                                <label class="form-check-label" for="inlineCheckbox1">Ja</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok1" type="radio" id="dok12" value="Nej">
                                <label class="form-check-label" for="inlineCheckbox2">Nej</label>
                            </div>
                            <br /><br />

                            <p> Rammer denne nogle licenslofter? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok2" type="radio" id="dok12" value="Ja">
                                <label class="form-check-label" for="inlineCheckbox1">Ja</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok2" type="radio" id="dok22" value="Nej">
                                <label class="form-check-label" for="inlineCheckbox2">Nej</label>
                            </div>

                            <br /><br />
                            <p> Ønsker du at blive involveret i projektet? </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok3" type="radio" id="dok31" value="Ja">
                                <label class="form-check-label" for="inlineCheckbox1">Ja</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="dok3" type="radio" id="dok32" value="Nej">
                                <label class="form-check-label" for="inlineCheckbox2">Nej</label>
                            </div>

                            <br />



                            </div>

                            <br /><br />
                            <button class="btn btn" name="update" type="submit" id="update"> Opdater værdierne</button>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>


                    <tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    </tr>

    </div>
    </td>
    </tr>

    <!-- footer ====== -->
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="f4f4f4">

        <tr>
            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
        </tr>

        <tr> <br />
            <br />
            <br />

            <td align="center">

                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

                    <tr>
                        <td>
                            <table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                <tr>
                                    <td align="left" style="color: #aaaaaa; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;">
                                        <div style="line-height: 24px;">

                                            <a href="" style="display: block; border-style: none !important; border: 0 !important; opacity: 0.5;"><img width="100" border="0" style="display: block; width: 200px;" src="https://simonottosen.dk/skat-logo.png" alt="" /></a>

                                        </div>
                                    </td>
                                </tr>


                            </table>

                            <table border="0" align="left" width="5" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                <tr>
                                    <td height="20" width="5" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                                </tr>
                            </table>

                            <table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">

                                <tr>
                                    <td align="center">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center">
                                                    <a style="font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;color: #5caad2; text-decoration: none;font-weight:bold;" href="{{UnsubscribeURL}}">Skriv en mail til opgavestiller</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>

        <tr>
            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
        </tr>

    </table>
    <!-- end footer ====== -->

</body>

</html>