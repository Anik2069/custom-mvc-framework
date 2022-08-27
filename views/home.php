<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 30px;
            background-color: #eee;
        }

        .faq-nav {
            flex-direction: column;
            margin: 0 0 32px;
            border-radius: 2px;
            border: 1px solid #ddd;
            box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15);

            .nav-link {
                position: relative;
                display: block;
                margin: 0;
                padding: 13px 16px;
                background-color: #fff;
                border: 0;
                border-bottom: 1px solid #ddd;
                border-radius: 0;
                color: #616161;
                transition: background-color .2s ease;

                &:hover {
                    background-color: #f6f6f6;
                }

                &.active {
                    background-color: #f6f6f6;
                    font-weight: 700;
                    color: rgba(0, 0, 0, .87);
                }

                &:last-of-type {
                    border-bottom-left-radius: 2px;
                    border-bottom-right-radius: 2px;
                    border-bottom: 0;
                }

                i.mdi {
                    margin-right: 5px;
                    font-size: 18px;
                    position: relative;
                }
            }
        }

        // TAB CONTENT
        .tab-content {
            box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15);

            .card {
                border-radius: 0;
            }

            .card-header {
                padding: 15px 16px;
                border-radius: 0;
                background-color: #f6f6f6;

                h5 {
                    margin: 0;

                    button {
                        display: block;
                        width: 100%;
                        padding: 0;
                        border: 0;
                        font-weight: 700;
                        color: rgba(0, 0, 0, .87);
                        text-align: left;
                        white-space: normal;

                        &:hover,
                        &:focus,
                        &:active,
                        &:hover:active {
                            text-decoration: none;
                        }
                    }
                }
            }

            .card-body {
                p {
                    color: #616161;

                    &:last-of-type {
                        margin: 0;
                    }
                }
            }
        }


        .accordion {
            >.card {
                &:not(:first-child) {
                    border-top: 0;
                }
            }
        }

        .collapse.show {
            .card-body {
                border-bottom: 1px solid rgba(0, 0, 0, .125);
            }
        }
    </style>
</head>

<body>
    <h4 class="text-center">Welcome To Question Answer Session</h4> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-10">
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header">

                                    <h5>
                                        <a href="<?php echo $routeToSolution1 ?>" class="btn btn-link" type="button">Q1 . We have a set of data in the following url: http://103.219.147.17/api/json.php
                                            From this data we need to find the speeds those have crossed 60. The result should contain the list &
                                            the total number of speeds those have crossed 60.</a>
                                    </h5>

                                    <h5>
                                        <a href="<?php echo $routeToSolution2 ?>" class="btn btn-link" type="button">Q2 .We have an array like
                                            array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3')
                                            We need to sort this. You can use this given array for your sorted solution.
                                            Expected Output:
                                            array('0'=>'z1', '3'=>'Z2', '4'=>'z3', '1'=>'Z10', '2'=>'z12')</a>
                                    </h5>


                                    <h5>
                                        <a href="<?php echo $routeToSolution3 ?>" class="btn btn-link" type="button">Q3 .We need to validate any IP address.
                                            We are sure that you can write a logic to validate any IP address and return true if valid and false if
                                            invalid. We hope to see that you do this without any built-in function.</a>
                                    </h5>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>