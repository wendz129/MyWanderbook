<!DOCTYPE html>
    <html>
        <head>
            <title>Profile | Mybook</title>
        </head>

        <style type="text/css">

            #blue_bar{

                height: 50px;
                background-color: #405d9b;
                color: #d9dfeb;
            }

            #search_box{

                width: 400px;
                height: 20px;
                border-radius: 5px;
                border: none;
                padding: 4px;
                font-size: 14px;
                background-image: url(search.png);
                background-repeat: no-repeat;
                background-position: right;

            }

            #profile_pic{

                width: 150px;
                border-radius: 50%;
                border: solid 2px white;
            }

            #menu_buttons{

                width: 100px;
                display: inline-block;
                margin:2px;
            }
            #friends_img{

                width: 75px;
                float: left;
                margin: 4px;
                /* border-radius: 50%; */
            }
            #friends_bar{

                min-height: 400px;
                margin-top: 20px;
                padding: 8px;
                text-align: center;
                font-size: 20px;
                color: #405d9b;
            }

            #friends{

                clear: both;
                font-size: 12px;
                font-weight: bold; 
                color: #405d9b; 
                /* cursor: pointer; */
            }

            textarea{

                width: 100%;
                border: none;
                font-family: tahoma;
                font-size: 14px;
                height: 60px;

                /*  style="float: right;background-color: #405d9b;color: white;border: none;padding: 5px;font-size: 14px;border-radius: 2px; */
            }

            #post_button {
                float: right;
                background-color: #405d9b;
                border: none;
                color: white;
                padding: 4px;
                font-size: 14px;
                border-radius: 2px;
                width: 50px;
            }

            #post_bar{

                margin-top: 20px;
                background-color: white;
                padding: 10px;
                /* border: solid 1px #ccc; */
            }

            #post{

                padding: 4px;
                font-size: 13px;
                display: flex;
                margin-bottom: 20px;
                /* border-bottom: solid 1px #ccc; */
            }

        </style>

        <body style="font-family: tahoma; background-color: #d0d8e4;">
            
            <br>
            <!-- top bar -->
            <div id="blue_bar">
                <div style="width: 800px;margin:auto;font-size: 30px;">

                    Mybook &nbsp &nbsp<input type="text" id="search_box" placeholder="Search for Love one">
                    <img src="selfie.jpg" style="width: 50px;float: right;">

                </div>
            </div>

        <!-- cover area -->
        <div style="width: 800px; margin: auto;min-height: 400px;">

            
            <!-- --below cover area---->
            <div style="display: flex;">

                <!---- friends area ---->
                <div style="min-height: 400px;flex:1;">

                    <div id="friends_bar">

                        <img src="selfie.jpg" id="profile_pic"><br>
                        Mary Banda
                    </div>

                </div>
                    
                <!---post area --->
                <div style="min-height: 400px;flex:2.5;padding: 20px; padding-right: 0px;">

                <div style="border: solid thin #aaa; padding: 10px; padding: 10px;background-color: white;">

                    <!-- What's on your mind? -->
                    <textarea placeholder="Write something here"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                              
                </div>

                    <!----post area --->
                    <div id="post_bar">

                    <!----post 1---->
                     <div id="post">
                        <div>
                            <img src="user1.jpg" style="width: 75px;margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">First Guy</div>
                            <!-- This is my first post. I am so happy to join Mybook. I hope to meet new friends here. --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nam qui voluptatum fugit laudantium minima consequuntur ipsam, recusandae natus, eius a illo nihil, possimus ab non temporibus tempora molestiae fugiat!
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                     </div>

                        <!----post 2---->
                        <div id="post">
                        <div>
                            <img src="user2.jpg" style="width: 75px;margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">African Dude</div>
                            <!-- This is my first post. I am so happy to join Mybook. I hope to meet new friends here. --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nam qui voluptatum fugit laudantium minima consequuntur ipsam, recusandae natus, eius a illo nihil, possimus ab non temporibus tempora molestiae fugiat!
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                     </div>
                        <!----post 3---->
                        <div id="post">
                        <div>
                            <img src="user3.jpg" style="width: 75px;margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">African Girl</div>
                            <!-- This is my first post. I am so happy to join Mybook. I hope to meet new friends here. --> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nam qui voluptatum fugit laudantium minima consequuntur ipsam, recusandae natus, eius a illo nihil, possimus ab non temporibus tempora molestiae fugiat!
                            <br/><br/>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                     </div>


                 </div>
            </div>

         </div>
    </div>

    </body>
</html>