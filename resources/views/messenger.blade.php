<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Latest compiled and minified CSS -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



    <link href="{{asset('')}}css/app.css" rel="stylesheet">


</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maitree:wght@400;600&display=swap');

        body {
            margin-top: 20px;
            font-family: 'Maitree', serif;
        }

        /*************** 1.Variables ***************/


        /* ------------------ Color Pallet ------------------ */


        /*************** 2.Mixins ***************/


        /************************************************
    ************************************************
										Search Box
	************************************************
************************************************/

        .chat-search-box {
            -webkit-border-radius: 3px 0 0 0;
            -moz-border-radius: 3px 0 0 0;
            border-radius: 3px 0 0 0;
            padding: .75rem 1rem;
        }

        .chat-search-box .input-group .form-control {
            -webkit-border-radius: 2px 0 0 2px;
            -moz-border-radius: 2px 0 0 2px;
            border-radius: 2px 0 0 2px;
            border-right: 0;
        }

        .chat-search-box .input-group .form-control:focus {
            border-right: 0;
        }

        .chat-search-box .input-group .input-group-btn .btn {
            -webkit-border-radius: 0 2px 2px 0;
            -moz-border-radius: 0 2px 2px 0;
            border-radius: 0 2px 2px 0;
            margin: 0;
        }

        .chat-search-box .input-group .input-group-btn .btn i {
            font-size: 1.2rem;
            line-height: 100%;
            vertical-align: middle;
        }

        @media (max-width: 767px) {
            .chat-search-box {
                display: none;
            }
        }


        /************************************************
	************************************************
									Users Container
	************************************************
************************************************/

        .users-container {
            position: relative;
            padding: 1rem 0;
            border-right: 1px solid #e6ecf3;
            height: 100%;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }


        /************************************************
	************************************************
											Users
	************************************************
************************************************/

        .users {
            padding: 0;
        }

        .users .person {
            position: relative;
            width: 100%;
            padding: 10px 1rem;
            cursor: pointer;
            border-bottom: 1px solid #f0f4f8;
        }

        .users .person:hover {
            background-color: #ffffff;
            /* Fallback Color */
            background-image: -webkit-gradient(linear, left top, left bottom, from(#e9eff5), to(#ffffff));
            /* Saf4+, Chrome */
            background-image: -webkit-linear-gradient(right, #e9eff5, #ffffff);
            /* Chrome 10+, Saf5.1+, iOS 5+ */
            background-image: -moz-linear-gradient(right, #e9eff5, #ffffff);
            /* FF3.6 */
            background-image: -ms-linear-gradient(right, #e9eff5, #ffffff);
            /* IE10 */
            background-image: -o-linear-gradient(right, #e9eff5, #ffffff);
            /* Opera 11.10+ */
            background-image: linear-gradient(right, #e9eff5, #ffffff);
        }

        .users .person.active-user {
            background-color: #ffffff;
            /* Fallback Color */
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f9fb), to(#ffffff));
            /* Saf4+, Chrome */
            background-image: -webkit-linear-gradient(right, #f7f9fb, #ffffff);
            /* Chrome 10+, Saf5.1+, iOS 5+ */
            background-image: -moz-linear-gradient(right, #f7f9fb, #ffffff);
            /* FF3.6 */
            background-image: -ms-linear-gradient(right, #f7f9fb, #ffffff);
            /* IE10 */
            background-image: -o-linear-gradient(right, #f7f9fb, #ffffff);
            /* Opera 11.10+ */
            background-image: linear-gradient(right, #f7f9fb, #ffffff);
        }

        .users .person:last-child {
            border-bottom: 0;
        }

        .users .person .user {
            display: inline-block;
            position: relative;
            margin-right: 10px;
        }

        .users .person .user img {
            width: 48px;
            height: 48px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
        }

        .users .person .user .status {
            width: 10px;
            height: 10px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            background: #e6ecf3;
            position: absolute;
            top: 0;
            right: 0;
        }

        .users .person .user .status.online {
            background: #9ec94a;
        }

        .users .person .user .status.offline {
            background: #c4d2e2;
        }

        .users .person .user .status.away {
            background: #f9be52;
        }

        .users .person .user .status.busy {
            background: #fd7274;
        }

        .users .person p.name-time {
            font-weight: 600;
            font-size: 15px;
            display: inline-block;
        }

        .users .person p.name-time .time {
            font-weight: 400;
            font-size: 10px;
            text-align: right;
            color: #8796af;
        }

        @media (max-width: 767px) {
            .users .person .user img {
                width: 30px;
                height: 30px;
            }

            .users .person p.name-time {
                display: none;
            }

            .users .person p.name-time .time {
                display: none;
            }
        }


        /************************************************
	************************************************
									Chat right side
	************************************************
************************************************/

        .selected-user {
            width: 100%;
            padding: 0 15px;
            min-height: 64px;
            line-height: 64px;
            border-bottom: 1px solid #e6ecf3;
            -webkit-border-radius: 0 3px 0 0;
            -moz-border-radius: 0 3px 0 0;
            border-radius: 0 3px 0 0;
        }

        .selected-user span {
            line-height: 100%;
        }

        .selected-user span.name {
            font-weight: 700;
        }

        .chat-container {
            position: relative;
            padding: 1rem;
        }

        .chat-container li.chat-left,
        .chat-container li.chat-right {
            display: flex;
            flex: 1;
            flex-direction: row;
            margin-bottom: 40px;
        }

        .chat-container li img {
            width: 48px;
            height: 48px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
        }

        .chat-container li .chat-avatar {
            margin-right: 20px;
        }

        .chat-container li.chat-right {
            justify-content: flex-end;
        }

        .chat-container li.chat-right>.chat-avatar {
            margin-left: 20px;
            margin-right: 0;
        }

        .chat-container li .chat-name {
            font-size: .75rem;
            color: #999999;
            text-align: center;
        }

        .chat-container li .chat-text {
            padding: .4rem 1rem;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background: #2180f3;
            font-weight: 300;
            line-height: 150%;
            position: relative;
            color: white;
        }

        .chat-container li .chat-text:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 10px;
            left: -20px;
            border: 10px solid;
            border-color: transparent #2180f3 transparent transparent;
        }

        .chat-container li.chat-right>.chat-text {
            text-align: right;
        }

        .chat-container li.chat-right>.chat-text:before {
            right: -20px;
            border-color: transparent transparent transparent #2180f3;
            left: inherit;
        }

        .chat-container li .chat-hour {
            padding: 0;
            margin-bottom: 10px;
            font-size: .75rem;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin: 0 0 0 15px;
        }

        .chat-container li .chat-hour>span {
            font-size: 16px;
            color: #9ec94a;
        }

        .chat-container li.chat-right>.chat-hour {
            margin: 0 15px 0 0;
        }

        @media (max-width: 767px) {

            .chat-container li.chat-left,
            .chat-container li.chat-right {
                flex-direction: column;
                margin-bottom: 30px;
            }

            .chat-container li img {
                width: 32px;
                height: 32px;
            }

            .chat-container li.chat-left .chat-avatar {
                margin: 0 0 5px 0;
                display: flex;
                align-items: center;
            }

            .chat-container li.chat-left .chat-hour {
                justify-content: flex-end;
            }

            .chat-container li.chat-left .chat-name {
                margin-left: 5px;
            }

            .chat-container li.chat-right .chat-avatar {
                order: -1;
                margin: 0 0 5px 0;
                align-items: center;
                display: flex;
                justify-content: right;
                flex-direction: row-reverse;
            }

            .chat-container li.chat-right .chat-hour {
                justify-content: flex-start;
                order: 2;
            }

            .chat-container li.chat-right .chat-name {
                margin-right: 5px;
            }

            .chat-container li .chat-text {
                font-size: .8rem;
            }
        }

        .chat-form {
            padding: 15px;
            width: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            border-top: 1px solid white;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .card {
            /* border: 0; */
            /* background: #f4f5fb; */
            /* -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 2rem; */
            /* box-shadow: none; */
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgb(69 90 100 / 8%);
            box-shadow: 0 1px 20px 0 rgb(69 90 100 / 8%);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .messenger-listView-tabs {
            display: inline-flex;
            width: 100%;
            margin-top: 10px;
            background-color: transparent;
            box-shadow: 0px 5px 6px rgb(0 0 0 / 6%);
        }

        .active-tab {
            border-bottom: 2px solid #2180f3;
        }

        .messenger-listView-tabs a {
            width: 100%;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            background-color: transparent;
            /* transition: background 0.3s; */
        }

        .messenger-listView-tabs a,
        .messenger-listView-tabs a:hover,
        .messenger-listView-tabs a:focus {
            color: #2180f3;
        }

        .svg-inline--fa.fa-w-14 {
            width: 0.875em;
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em;
        }

        .main-container {
            display: block;
            position: relative;
            background: #eff5f7;
            min-height: calc(100vh - 56px);
            margin-top: 0;
        }
    </style>

    <div class="main-container">


        <div class="container">

            <!-- Page header start -->
            <div class="page-title">
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h5 class="title">Chat App</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> </div>
                </div>
            </div>
            <!-- Page header end -->

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card m-0">

                            <!-- Row start -->
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                        <div class="users-container">
                                            <div class="chat-search-box">
                                                <div class="input-group">
                                                    <input class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-info">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>


                                                <div class="messenger-listView-tabs">
                                                    <a href="#" class="active-tab" data-view="users">
                                                        <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                                                        </svg><!-- <span class="far fa-user"></span> --> People</a>
                                                    <a href="#" data-view="groups">
                                                        <svg class="svg-inline--fa fa-users fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                                                        </svg><!-- <span class="fas fa-users"></span> --> Groups</a>
                                                </div>

                                            </div>

                                            <ul class="users">
                                                <li class="person" data-chat="person1">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                        <span class="status busy"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Steve Bangalter</span>
                                                        <span class="time">15/02/2019</span>
                                                    </p>
                                                </li>
                                                <li class="person" data-chat="person1">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                                        <span class="status offline"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Steve Bangalter</span>
                                                        <span class="time">15/02/2019</span>
                                                    </p>
                                                </li>
                                                <li class="person active-user" data-chat="person2">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Peter Gregor</span>
                                                        <span class="time">12/02/2019</span>
                                                    </p>
                                                </li>
                                                <li class="person" data-chat="person3">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                        <span class="status busy"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Jessica Larson</span>
                                                        <span class="time">11/02/2019</span>
                                                    </p>
                                                </li>
                                                <li class="person" data-chat="person4">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                                        <span class="status offline"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Lisa Guerrero</span>
                                                        <span class="time">08/02/2019</span>
                                                    </p>
                                                </li>
                                                <li class="person" data-chat="person5">
                                                    <div class="user">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <p class="name-time">
                                                        <span class="name">Michael Jordan</span>
                                                        <span class="time">05/02/2019</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                        <div class="selected-user">
                                            <span>To: <span class="name">Emily Russell</span></span>
                                        </div>
                                        <div class="chat-container">
                                            <ul class="chat-box chatContainerScroll">
                                                <li class="chat-left">
                                                    <div class="chat-avatar">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                        <div class="chat-name">Russell</div>
                                                    </div>
                                                    <div class="chat-text">Hello, I'm Russell.
                                                        <br>How can I help you today?
                                                    </div>
                                                    <!-- <div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div> -->
                                                </li>
                                                <li class="chat-right">
                                                    <!-- <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div> -->
                                                    <div class="chat-text">Hi, Russell
                                                        <br> I need more information about Developer Plan.
                                                    </div>
                                                    <div class="chat-avatar">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                        <div class="chat-name">Sam</div>
                                                    </div>
                                                </li>
                                                <li class="chat-left">
                                                    <div class="chat-avatar">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                                        <div class="chat-name">Russell</div>
                                                    </div>
                                                    <div class="chat-text">Are we meeting today?
                                                        <br>Project has been already finished and I have results to show you.
                                                    </div>
                                                    <!-- <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div> -->
                                                </li>
                                                <li class="chat-right">
                                                    <!-- <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div> -->
                                                    <div class="chat-text">Well I am not sure.
                                                        <br>I have results to show you.
                                                    </div>
                                                    <div class="chat-avatar">
                                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                                        <div class="chat-name">Joyse</div>
                                                    </div>
                                                </li>
                                                <!-- <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Russell</div>
                                        </div>
                                        <div class="chat-text">The rest of the team is not here yet.
                                            <br>Maybe in an hour or so?</div>
                                        <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
                                        <div class="chat-text">Have you faced any problems at the last phase of the project?</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                            <div class="chat-name">Jin</div>
                                        </div>
                                    </li>
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Russell</div>
                                        </div>
                                        <div class="chat-text">Actually everything was fine.
                                            <br>I'm very excited to show this to our team.</div>
                                        <div class="chat-hour">07:00 <span class="fa fa-check-circle"></span></div>
                                    </li> -->
                                            </ul>
                                            <div class="form-group mt-3 mb-0">
                                                <textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>

                    </div>

                </div>
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->

        </div>

    </div>

</body>

</html>