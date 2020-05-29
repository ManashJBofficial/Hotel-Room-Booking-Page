<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room booking System | DC2019MCA0009</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">    
        <section class="room">
            <div class="container">
                <div class="room-content">
                    

                    <div class="room-booking-form">
                        <h2 class="form-title">Hotel MJ | Room Reservation</h2>
                        <form method="POST" class="room-form" id="room-form"  action="room_book_later.php" method="POST">
                            <div class="form-group">
                                <label for="id">Room Id:</label><br><br>
                                <input type="text" id="id" name="id" value="<?php echo rand(1,200); ?>" readonly>                              
                            </div>
                            <div class="form-group">
                                <label for="name">Your name:</label><br><br>
                                <input type="text" id="name" name="name" placeholder="Enter your Name" pattern="[a-zA-Z][a-zA-Z ]+" required>                            
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No:</label><br><br>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your Phone No" pattern="[0-9]+" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="email">Email id:</label><br><br>
                                <input type="email" id="email" name="email" placeholder="Enter your Email id" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="g_no">Number of Guests:</label>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                <select name="g_no" id="g_no">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="c_in">Check In date:</label><br><br>
                                <input type="date" id="c_in" name="c_in" required>
                                <span id="text"></span>
                            </div>
                            <div class="form-group">
                                <label for="c_out">Check Out date:</label><br><br>
                                <input type="date" id="c_out" name="c_out" required>
                                <span id="text"></span>
                            </div>
                            <div class="form-group">
                                <label for="r_type">Room Type:</label>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                <select name="r_type" id="r_type">
                                    <option value="General">General</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Super Deluxe">Super Deluxe</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="r_num">No of Rooms:</label>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                <select name="r_num" id="r_num">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>  

                        <p>By Submiting the order, i agree to pay the total Price upon arriving the Hotel.</p>

                            <div class="form-group form-button">
                                <button type="submit" name="submit" class="form-submit " >Submit</button>
                            </div>
                            <p>Note:<br>
                            Price per General room: 2000 Rupee<br>
                            Price per Deluxe room: 4000 Rupee<br>
                            Price per Super Deluxe room: 6000 Rupee<br>
                            Price per VIP room: 8000 Rupee
                            </p><br>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="js/script.js">
</body>

</html>