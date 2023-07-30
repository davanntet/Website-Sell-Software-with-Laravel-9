<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="icon" type="image/x-icon" href="image/favicon2.png">
    <link rel="stylesheet" href="{{asset('css/amazon.css')}}">
</head>
<body>
    <div class="full-content">
        <div class="logo-header">
            <br>
            <img src="{{asset('image/amazon2.png')}}" width="150px" alt="Sorry!" class="logo-amazon">
            <form>
                <div class="form">
                <select name="" id="opselector" style="border: none;vertical-align: middle;outline: none;background-color:rgb(233, 233, 233);border-top-left-radius:7px;border-bottom-left-radius:7px;color: #CE7E00;">
                    <option value="1">All</option>
                    <option value="2">Programming</option>
                    <option value="3">History</option>
                    <option value="4">Machine</option>
                    <option value="5">Fairy tale</option>
                    <option value="6">Research</option>
                    <option value="7">Inovation</option>
                </select>
                <script>
                     setInterval(function(){ 
                        const select=document.querySelector("#opselector");
                        const search=document.querySelector("#search");
                        let x=select.selectedIndex;
                        if(x==0){
                            select.style.width="40px";
                            search.style.width="300px";    
                        }else if(x==1){
                            select.style.width="105px";
                            search.style.width="235px";  
                        }else if(x==2){
                            select.style.width="65px";
                            search.style.width="275px";  
                        }else if(x==3){
                            select.style.width="75px";
                            search.style.width="265px";  
                        }else if(x==4){
                            select.style.width="80px";
                            search.style.width="260px";  
                        }else if(x==5){
                            select.style.width="80px";
                            search.style.width="260px";  
                        }else if(x==6){
                            select.style.width="75px";
                            search.style.width="265px";  
                        }
                     },0);
                </script>
                <input type="search" name="" id="search" class="search-bar" placeholder="search">
                <button class="button-search"><img src="{{asset('image/search.png')}}" alt="" width="20px"></button>
                </div>
            </form> 
            <div  class="icon-buy">
                <button class="button-buy"><img src="{{asset('image/icon-buy.png')}}" alt="Sorry!" width="50px"><label style="color:black;font-size:19px;font-weight: bold;">Cart</label></button>
            </div>    
        </div>
        <div class="menu-bar">
        <ul>
            <a href=""><li>
                <div>
                    <div style="float: left;display: block;margin-top: px;margin-left:40px;margin-top: 5px;text-align: center;align-content: center;">
                        <div style="width:25px;height:2px;background-color:#CE7E00;"></div>
                        <div style="width:25px;height:2px;background-color:#CE7E00;margin-top: 2px;"></div>
                        <div style="width:25px;height:2px;background-color:#CE7E00;margin-top: 2px;"></div>                    
                    </div>
                    <div style="margin-right: 37px;">
                        All 
                    </div>                    
                </div>

               </li></a>
            {{-- <a href=""><li>Today's Deals</li></a> --}}
            {{-- <a href=""><li>Customer Servide</li></a>
            <a href=""><li>Registry</li></a> --}}
            <a href=""><li>Contact US</li></a>
            <a href=""><li>About US</li></a>
        </ul>
        </div>
    <div>
        <table class="table1">
            <thead>
                
                    <th><h3 style="color: rgb(34, 18, 73);">Sellect Category</h3></th>
                
            </thead>
            <tbody>
                <tr>
                    <td><a href="#">All</a></td>
                    <td><img src="{{asset('image/check.ico')}}" width="15px"></td>
                    
                </tr>
                <tr>
                    <td><a href="#">Programming</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>
                <tr>
                    <td><a href="#">History</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>
                <tr>
                    <td><a href="#">Machine</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>
                <tr>
                    <td><a href="#">Fairy tale</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>
                <tr>
                    <td><a href="#">Research</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>
                <tr>
                    <td><a href="#">Inovation</a></td>
                    <td><img src="image/check.ico" width="15px"></td>
                </tr>

            </tbody>
        </table>
        <table class="table2">
            <thead>
                <tr>
                    <th colspan="4">
                      <div class="body">
                        <div class="slider">
                            <div class="sliders">
                                <input type="radio" name="radio-btn" id="radio1">
                                <input type="radio" name="radio-btn" id="radio2">
                                <input type="radio" name="radio-btn" id="radio3">
                                <input type="radio" name="radio-btn" id="radio4">
                                <div class="slide first">
                                    <img src="{{asset('image/header.jpg')}}">
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/header1.png')}}">
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/header2.jpg')}}">
                                </div>
                                <div class="slide">
                                    <img src="{{asset('image/header3.jfif')}}">
                                </div>
                                <div class="navigation-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                    <div class="auto-btn4"></div>
                                </div>
                            </div>
                            <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div>
                        </div>
                      </div>
                    </th>
                </tr>
                <tr>
                    
                    <th style="text-align:left ; height: 50px;" colspan="4">
                        <a href="#"><img src="image/home2.png" width="21px"></a><label class="gt">&nbsp;&gt;&nbsp;</label><a href="#">Category</a><label class="gt">&nbsp;&gt;&nbsp;</label><a href="#">Programming</a><label class="gt">&nbsp;&gt;&nbsp;</label><a href="#">Sub Category</a>
                    </th>
                </tr>
            </thead>
        </table>
        
        
    </div>
    <div class="shop">
        <h1 style="color: rgb(34, 18, 73);">Product</h1>
        <div class="item1">
            <a href="#"><img src="image/java1.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
            
        </div>
        <div class="item">
            <a href="#"><img src="image/java2.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/java3.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/java4.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="clear"><br></div>
        <div class="item1">
            <a href="#"><img src="image/web1.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
            
        </div>
        <div class="item">
            <a href="#"><img src="image/web2.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/web3.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/web4.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="clear"><br></div>
        <div class="item1">
            <a href="#"><img src="image/javascript1.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
            
        </div>
        <div class="item">
            <a href="#"></a><img src="image/javascript2.webp" class="book">
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/javascript3.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/javascript4.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="clear"><br></div>
        <div class="item1">
            <a href="#"><img src="image/python1.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
            
        </div>
        <div class="item">
            <a href="#"><img src="image/python2.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/python3.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/python4.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="clear"><br></div>
        <div class="item1">
            <a href="#"><img src="image/game1.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
            
        </div>
        <div class="item">
            <a href="#"><img src="image/gam2.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/game3.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
        <div class="item">
            <a href="#"><img src="image/game4.webp" class="book"></a>
            <p class="book-label">Java: A Beginner's Guide, Ninth Edition<br><br><button class="ibutton">Add to cart</button></p>
        </div>
    </div>
    <div class="clear"><br></div>
    <div class="prne">
       <a href="#"><input type="button" value="&laquo;prev" " class="prev" ></a><label style="color:red">0</label><a href="#"><input type="button" value="next&raquo;" class="next"></a>
    </div>
    </div>
    <div class="clear"><br></div>
    <div class="footer">
        <ul>
            <a href="#"><li><img src="image/facebook.ico" width="25px" class="icon-footer"></li>Facebook</a>
            <a href="#"><li><img src="image/telegram.ico" width="25px" class="icon-footer"></li>Telegram</a>
            <a href="#"><li><img src="image/twitter.png" width="25px" class="icon-footer"></li>Twiiter</a>
            <a href="#"><li><img src="image/instagram.png" width="25px" class="icon-footer"></li>Instagram</a>
        </ul>    
    </div>
    <script>
        var count=1;
        var dec=3;
        setInterval(function(){ 
            if(count<=4){
                document.getElementById("radio"+count).checked = true;
            }
            if(count>4){
                document.getElementById("radio"+dec).checked = true;
                dec--;
                if(dec==0){
                    count=1;
                    dec=3;
                }
            }
            count++; 
        },5000);
    </script>
</body>
</html>
