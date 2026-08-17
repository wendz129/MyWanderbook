<!DOCTYPE html>
    <html>
        <head>
            <title>Profile | Mybook</title>
        </head>

        <style type="text/css">

            /* #blue_bar{

                height: 50px;
                background-color: #405d9b;
                color: #d9dfeb;
            } */
            #blue_bar{
                height: 50px;
                background-color: #405d9b;
                color: #d9dfeb;
            }
            /* #search_box{

                width: 400px;
                height: 20px;
                border-radius: 5px;
                border: none;
                padding: 4px;
                font-size: 14px;
                background-image: url(search.png);
                background-repeat: no-repeat;
                background-position: right;
            } */
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
            /* #profile_pic{

                width: 150px;
                margin-top: -300px;
                border-radius: 50%;
                border: solid 2px white;
            } */
            #profile_pic{
                width: 150px;
                margin-top: -300px;
                border-radius: 50%;
                border: solid 2px white;
            }

            /* #menu_buttons{
                width: 100px;
                display: inline-block;
                margin:2px;
            } */
            #menu_buttons{
                width: 100px;
                display: inline-block;
                margin: 2px;
            }
            /* #friends_img{

                width: 75px;
                float: left;
                margin: 4px;
                /* border-radius: 50%; 
            } */
            #friends_img{
                width: 75px;
                float: left;
                margin: 4px;
            }
            #friends_bar{

                /* min-height: 400px;
                margin-top: 20px;
                padding: 8px;
                text-align: center;
                font-size: 20px;
                color: #405d9b; */
                background-color: white;
                /* border: solid 1px #ccc; */
                min-height: 400px;
                margin-top: 20px;
                color: #aaa;
                padding: 8px;
            }

            /* #friends{

                clear: both;
                font-size: 12px;
                font-weight: bold; 
                color: #405d9b; 
                /* cursor: pointer; 
            } */
            #friends {
            
                clear: both;
                font-size: 12px;
                font-weight: bold;
                color: #405d9b;
            }

            textarea{

                width: 100%;
                border: none;
                font-family: tahoma;
                font-size: 14px;
                height: 60px;

                /*  style="float: right;background-color: #405d9b;color: white;border: none;padding: 5px;font-size: 14px;border-radius: 2px; */
            }

            /* #post_button {
                float: right;
                background-color: #405d9b;
                border: none;
                color: white;
                padding: 4px;
                font-size: 14px;
                border-radius: 2px;
                width: 50px;
            } */
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

            /* #post_bar{

                margin-top: 20px;
                background-color: white;
                padding: 10px;
                /* border: solid 1px #ccc; 
            } */
            #post_bar{
                margin-top: 20px;
                background-color: white;
                padding: 10px;
            }
            /* #post{

                padding: 4px;
                font-size: 13px;
                display: flex;
                margin-bottom: 20px;
                /* border-bottom: solid 1px #ccc; 
            } */
            #post{
                padding: 4px;
                font-size: 13px;
                display: flex;
                margin-bottom: 20px;
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

             <div style="background-color: white;text-align: center;color: #405d9b;">

                <img src="mountain.jpg" style="width: 100%;">
                <img id="profile_pic" src="selfie.jpg">
                <br>
                <div style="font-size: 30px;">Mary Banda</div>
                <br>

                <div id="menu_buttons">Timeline</div>
                 <div id="menu_buttons">About</div> 
                 <div id="menu_buttons">Friends</div>
                 <div id="menu_buttons">Photos</div>
                 <div id="menu_buttons">Settings</div>

             </div>

                <!-- --below cover area---->
            <div style="display: flex;">

                <!---- friends area ---->
                <div style="min-height: 400px;flex:1;">

                    <div id="friends_bar">

                    Friends<br>

                    <div id="friends">
                        <img id="friends_img" src="user1.jpg">
                        <br>
                        First User
                    </div>

                    <div id="friends">
                        <img id="friends_img" src="user2.jpg">
                        <br>
                        Second User
                    </div>

                    <div id="friends">
                        <img id="friends_img" src="user3.jpg">
                        <br>
                        African Girl
                    </div>

                    <div id="friends">
                        <img id="friends_img" src="user4.jpg">
                        <br>
                        African dude
                    </div>

                </div>

            </div>
                    
                <!---post area --->
                <div style="min-height: 400px;flex:2.5;padding: 20px; padding-right: 0px;">

                    <div style="border: solid thin #aaa; padding: 10px; padding: 10px;background-color: white;">

                    <!-- What's on your mind? -->
                    <textarea placeholder="Write something here"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                        <!-- What's on your mind?
                        <textarea style="width: 100%;border: none;" placeholder="Write something here..."></textarea>

                        <input type="file" name="file">
                        <input id="post_button" type="submit" value="Post" style="float: right;background-color: #405d9b;color: white;border: none;padding: 5px;font-size: 14px;border-radius: 2px;">

                        <br> -->        
                    </div>
                    <!-- <div style="border: solid 1px #ccc; padding: 10px; background-color: white;">


                    <div style="padding: 10px; background-color: white;">

                        <div style="font-weight: bold;color: #405d9b;">Mary Banda</div>
                        <img src="selfie.jpg" style="width: 100%;">

                        <br><br>
                        Like &nbsp &nbsp &nbsp Comment &nbsp &nbsp &nbsp Share
                        <hr style="border: none;border-bottom: solid 1px #ccc;">
                    </div>

                    <br>

                    <div style="padding: 10px; background-color: white;">

                        <div style="font-weight: bold;color: #405d9b;">Mary Banda</div>
                        <img src="mountain.jpg" style="width: 100%;">

                        <br><br>
                        Like &nbsp &nbsp &nbsp Comment &nbsp &nbsp &nbsp Share
                        <hr style="border: none;border-bottom: solid 1px #ccc;">
                    </div> -->

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