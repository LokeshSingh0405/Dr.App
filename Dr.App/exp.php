<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"> 

    <style>

    </style>
</head>
<body>
    <br>
    <input name="email" type="email" class="form-input" placeholder="email"><br><br><br><br>
    <input name="email" type="email" class="form-input" placeholder="email"><br><br><br><br>
    <input name="email" type="email" class="form-input" placeholder="email">

    <br><br><br><br><input type="submit" value="ok">
</body>
</html>
.search-box {
 position: absolute;
 top: 50%;
 left: 25%;
 transform: translate(-0%, -50%);
 background: #BDBDBD;
 height: 30px;
 border-radius: 30px;
 padding: 0px;
}

.search-box:hover > .search-txt {
 width: 350px;
 padding: 0 6px;
}

.search-box:hover > .search-btn {
 background: black;
 color: white;
}

.search-btn {
 float: right;
 width: 30px;
 height: 30px;
 border-radius: 50%;
 background: #BDBDBD;
 display: flex;
 justify-content: center;
 align-items: center;
 transition: 0.4s;
 color: white;
 ;
}


.search-txt {
 border: none;
 background: none;
 outline: none;
 float: left;
 padding: 0;
 color: black;
 font-size: 16px;
 transition: 0.4s;
 line-height: 30px;
 width: 0px;
 font-weight: bold;
}
     <div class="search-box">
       <input type="text" name="namecontainer" class="search-txt" placeholder="Search Doctors"/>
       <a class="search-btn" onclick="myFunction()" href="search.php">
       <i class="fas fa-search"></i>
       </a>
     </div>
     
        <div class="search" id="searchcontainer">
        <input type="search" class="search-txt" name="namecontainer" id="mySearch" placeholder="Search Doctor...">
        <th><button class="search_button" type="submit" >Search</button>
        
        
        </div>