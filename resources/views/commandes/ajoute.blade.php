<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="card">
            <div class="row d-flex justify-content-between mx-2 px-3 card-strip">
                <div class="left d-flex flex-column">
                    <h5 class="mb-1">10:00 - 11:00 AM</h5>
                    <p class="text-muted mb-1 sm-text">Monday, August 19</p>
                </div>
                <div class="right">
                    <img src="https://i.imgur.com/Mcd6HIg.jpg">
                </div>
            </div>
            <div class="row d-flex justify-content-between mx-2 px-3 card-strip">
                <div class="left d-flex flex-column">
                    <h5 class="mb-1">Lindsey Johnson</h5>
                    <p class="text-muted mb-1 sm-text">FIRST VISIT</p>
                </div>
                <div class="right d-flex">
                    <div class="fa fa-comment-o"></div>
                    <div class="fa fa-phone"></div>
                </div>
            </div>
            <div class="row justify-content-between mx-2 px-3 card-strip">
                <div class="left d-flex">
                    <h5 class="mb-1 text-muted">Blowout and style</h5>
                    <span class="time">1 hr</span>
                </div>
                <div class="right d-flex">
                    <p class="mb-0 price"><strong class="text-muted">$80.00</strong></p>
                </div>
            </div>
            <div class="row d-flex justify-content-between mx-2 px-3">
                <button class="btn btn-white">Reschedule</button>
                <button class="btn btn-purple">Approve</button>
            </div>
        </div>
    </div>
</div>
<style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #D1C4E9;
    background-repeat: no-repeat;
}

.card {
    margin: 60px auto;
    border: none !important;
    width: 450px;
}

@media screen and (max-width: 768px) {
    .card {
        width: 350px;
    }
}

.card-strip {
    border-bottom: 1px solid lightgray;
    padding-top: 20px;
    padding-bottom: 20px;
}

img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    cursor: pointer;
}

.sm-text {
    font-size: 15px;
}

.fa {
    font-size: 30px;
    padding: 10px;
}

.fa-comment-o {
    color: gray;
    cursor: pointer;
}

.fa-phone {
    color: #1E88E5;
    padding-left: 20px;
    cursor: pointer;
}

.time {
    border: 1px lightgray solid;
    border-radius: 5px;
    font-weight: bold;
    padding: 1px 8px;
    margin: 0px 6px;
}

.price {
    font-size: 20px;
}

.text-muted {
    color: #BDBDBD !important;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

.btn {
    width: 48%;
    height: 55px;
    margin: 20px 0px;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-white {
    background-color: #fff;
    color: #000;
    border: 1px gray solid;
}

.btn-white:hover {
    background-color: lightgray;
    color: #000;
} 

.btn-purple {
    background-color: #5E35B1;
    color: #fff;
    border: 1px #5E35B1 solid;
}

.btn-purple:hover {
    background-color: #311B92;
    color: #fff;
}
</style>
</body>
</html>