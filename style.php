
  
  <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Kanit&display=swap');
            body{
                font-family: 'Kanit', sans-serif;
                background-color: #151515;
            }
		img.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
img.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
		.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
.link {
	color: gray;
}
link:link {
  text-decoration: none;
}

link:visited {
  text-decoration: none;
}

link:hover {
	color: white;
}

link:active {
  text-decoration: underline;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: gray;
}

    /* Card Styles */

    .card-sl {
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .card-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .card-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .card-heading {
        font-size: 18px;
        font-weight: bold;
        background: #fff;
        color: #212529;
        padding: 10px 15px;
    }

    .card-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .card-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #1F487E;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }

    a {
        text-decoration: none;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }


    .profile-card-1 {
    background-color: #FFF;
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-image: url(../img/profile-bg-1.jpg);
    background-position: center;
    padding-top: 100px;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    max-width: 300px;
}

.profile-card-1 .profile-content {
    position: relative;
    background-color: #FFF;
    padding: 70px 20px 20px 20px;
    text-align: center;
}

.profile-card-1 .profile-img {
    position: absolute;
    height: 100px;
    left: 0px;
    right: 0px;
    z-index: 10;
    top: -50px;
    transition: all 0.25s linear;
    transform-style: preserve-3d;
}

.profile-card-1 .profile-img img {
    height: 100px;
    margin: auto;
    border-radius: 50%;
    border: 5px solid #FFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.profile-card-1 .profile-name {
    font-size: 18px;
    font-weight: bold;
    color: #021830;
}

.profile-card-1 .profile-address {
    color: #777;
    font-size: 12px;
    margin: 0px 0px 15px 0px;
}

.profile-card-1 .profile-description {
    font-size: 13px;
    padding: 5px 10px;
    color: #777;
}

.profile-card-1 .profile-icons .fa {
    margin: 5px;
    color: #777;
}

.profile-card-1:hover {
    box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
}

.profile-card-1:hover .profile-img {
    transform: rotateY(180deg);
}

.profile-card-2 {
    max-width: 300px;
    background-color: #FFF;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}

.profile-card-2 img {
    transition: all linear 0.25s;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 70px;
    font-size: 30px;
    color: #FFF;
  text-shadow: 2px 2px 4px #000000;
    font-weight: bold;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: #FFF;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
  text-shadow: 2px 2px 4px #000000;
    position: absolute;
    bottom: 50px;
    left: 30px;
    color: #FFF;
    font-size: 13px;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons .fa {
    margin: 5px;
}

.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}

.profile-card-2:hover .profile-icons {
    right: 40px;
}

.profile-card-3 {
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 25px 15px;
}

.profile-card-3 .profile-name {
    font-weight: bold;
    color: #21304e;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-3 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
}

.profile-card-3 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-3 .profile-icons {
    margin: 15px 0px;
}

.profile-card-3 .profile-icons .fa {
    color: #fe455a;
    margin: 0px 5px;
}

.profile-card-3:hover img {
    height: 110px;
    width: 110px;
    margin: 5px auto;
}

.profile-card-4 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-4 img {
    transition: all 0.25s linear;
}

.profile-card-4 .profile-content {
    position: relative;
    padding: 15px;
    background-color: #FFF;
}

.profile-card-4 .profile-name {
    font-weight: bold;
    position: absolute;
    left: 0px;
    right: 0px;
    top: -70px;
    color: #FFF;
    font-size: 17px;
}

.profile-card-4 .profile-name p {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1.5px;
}

.profile-card-4 .profile-description {
    color: #777;
    font-size: 12px;
    padding: 10px;
}

.profile-card-4 .profile-overview {
    padding: 15px 0px;
}

.profile-card-4 .profile-overview p {
    font-size: 10px;
    font-weight: 600;
    color: #777;
}

.profile-card-4 .profile-overview h4 {
    color: #273751;
    font-weight: bold;
}

.profile-card-4 .profile-content::before {
    content: "";
    position: absolute;
    height: 20px;
    top: -10px;
    left: 0px;
    right: 0px;
    background-color: #FFF;
    z-index: 0;
    transform: skewY(3deg);
}

.profile-card-4:hover img {
    transform: rotate(5deg) scale(1.1, 1.1);
    filter: brightness(110%);
}

.profile-card-5 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 50px 15px 25px 15px;
}

.profile-card-5 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
    position: relative;
}

.profile-card-5::before {
    content: "";
    position: absolute;
    top: -60px;
    right: 0px;
    left: 0px;
    height: 170px;
    background-color: #4fb96e;
    transform: skewY(-20deg);
}

.profile-card-5 .profile-name {
    padding-top: 15px;
    font-weight: bold;
    color: #333;
}

.profile-card-5 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-5 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-5 .profile-overview {
    padding: 15px 0px;
}

.profile-card-5 .profile-overview p {
    color: #777;
    font-size: 13px;
}

.profile-card-5 .profile-overview h2 {
    font-weight: bold;
    color: #1e2832;
}

.profile-card-5 .profile-icons .fa {
    margin: 7px;
    color: #4fb96e;
}

.profile-card-5:hover img {
    transform: rotate(-5deg);
}

.profile-card-6 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-6 img {
    transition: all 0.15s linear;
}

.profile-card-6 .profile-name {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 25px;
    font-weight: bold;
    color: #FFF;
    padding: 15px 20px;
    background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
    transition: all 0.15s linear;
}

.profile-card-6 .profile-position {
    position: absolute;
    color: rgba(255, 255, 255, 0.4);
    left: 30px;
    top: 100px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview {
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
    color: #FFF;
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview h3 {
    font-weight: bold;
}

.profile-card-6 .profile-overview p {
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-6:hover img {
    filter: brightness(80%);
}

.profile-card-6:hover .profile-name {
    padding-left: 25px;
    padding-top: 20px;
}

.profile-card-6:hover .profile-position {
    left: 40px;
}

.profile-card-6:hover .profile-overview {
    padding-bottom: 25px;
}

.profile-card-7 {
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-7 .profile-content {
    padding: 60px 30px 30px 30px;
    background-color: #FFF;
    position: relative;
}

.profile-card-7 .profile-content img {
    position: absolute;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    top: -40px;
    border: 5px solid #FFF;
}

.profile-card-7 .profile-content .profile-name {
    position: absolute;
    font-size: 17px;
    font-weight: bold;
    top: -35px;
    left: 125px;
    color: #FFF;
}

.profile-card-7 .profile-overview {
    padding: 5px 0px;
}

.profile-card-7 .profile-overview p {
    color: #777;
    font-size: 11px;
    font-weight: 600;
}

.profile-card-7 .profile-overview h5 {
    color: #142437;
    font-weight: bold;
}

.profile-card-8 {
    background: linear-gradient(#09121c, #36445a);
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    transition: all 0.25s linear;
}

.profile-card-8 .profile-name {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 25px;
    color: #58d683;
    font-size: 17px;
    font-weight: bold;
}

.profile-card-8 .profile-designation {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 50px;
    color: #FFF;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
}

.profile-card-8 .profile-icons {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 80px;
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-8 .profile-icons .fa {
    margin: 5px;
}

.profile-card-8:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-9 {
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #FFF;
    transition: all 0.25s linear;
}

.profile-card-9 img {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    margin: 10px auto;
}

.profile-card-9 .profile-name {
    font-size: 15px;
    color: #3249b9;
    font-weight: 600;
}

.profile-card-9 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-9 .profile-description {
    padding: 10px;
    font-size: 13px;
    color: #777;
    margin: 15px 0px;
    background-color: #F1F2F3;
    border-radius: 5px;
}

.profile-card-9 a {
    padding: 10px 15px;
    background-color: #3249b9;
    color: #FFF;
    font-size: 11px;
    border-radius: 25px;
}

.profile-card-9:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-10 {
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #1f2124;
    color: #EEE;
}

.profile-card-10 img {
    margin: 10px auto;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 10px solid transparent;
    box-shadow: 0px 0px 0px 2px #64c17b;
    transition: all 0.25s linear;
}

.profile-card-10 .profile-name {
    color: #FFF;
    font-weight: bold;
    font-size: 17px;
}

.profile-card-10 .profile-location {
    font-size: 13px;
    opacity: 0.7;
}

.profile-card-10 .profile-description {
    padding: 10px;
    font-size: 13px;
}

.profile-card-10 .profile-icons .fa {
    color: #ffc75e;
    margin: 10px;
}

.profile-card-10:hover img {
    transform: scale(1.1);
}
      </style>