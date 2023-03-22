<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    text-align: center;
    height: 100px;
    align-items: center;
}
.menu > img{
    position: relative;
    /*  */
}
.menu >  .box , .search_bar > .box {
    width: 100px;
    height: 100px;
    display: grid;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 10px -31px 249px -16px rgba(0,0,0,0.75);
}
.menu > ul {
    margin: 0;
    display: none;
}
.menu > ul > li{
    list-style-type: none;
    margin: 5px;
}
.menu > ul > li > a{
    text-decoration: none;
    color: black;
}
.logo > h1{
    color: #43a9ff;
}
.logo{
    position: relative;
}
.img_db{
    width: 650px;
}
.logo::after {
    content: " ";
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    left: 4em;
    top: -9em;
    box-shadow: 2px 6px 300px -97px rgb(0 0 0 / 75%);
}
.search_bar{
    display: flex;
    justify-content: flex-end;
}
.header_info{
    margin: 15em 0 -5em 0;
}
.header_info  > .container > p{
    margin-bottom: 100px;
}
.btns {
    box-shadow: 5px 5px 50px 3px rgb(0 0 0 / 10%);
    text-transform: uppercase;
    background: none;
    color: #43a9ff;
    border: none;
    width: 200px;
    height: 50px;
    border-radius: 10%;
    margin-top: 80px;
    margin-bottom: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    
}
.header_info > .container > p, .cont > .container > .text_box_info > p,.cont > .container > p ,.cont > .container > .text_box > .box > p{
    color:#85848491;
    margin-bottom: 20px;
}
.cont > .container > .text_box > .box > h5{
    margin: 33px;
}
.text_box{
    margin:6em 0 10em 0;
}
.text_box_info {
    margin: 105px;
}
.wrapper{
    background: url(imagini/Photo.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    
    height: 100vh;
}
.wrapp{
    margin-bottom: 38em;
}
.pixis_text{
    text-align: center;
    margin: 0 auto;
    display: grid;
    align-items: center;
    justify-content: center;
    background: #f7f8fb;
}
.text{
    width: 500px;
    text-align: left;
}
.wrapper_box{
    display:flex;
    flex-direction:row;
}
.wrapper_box:nth-child(odd){
    flex-direction:row-reverse;
}
.wrapper_box > .wrapper_info > .pixis_text > .text > h1{
    margin: 190px 0 50px 0;
}

.text_info{
    width: 600px;
    text-align: left;
    margin: 0 auto;
    padding-top: 25%;
}
.text_info > h1{
    color: #43a9ff;
}

.section_text.col {
    text-align: center;
    margin-top: 25%;
}
.cont_temp {
    margin-top: 78em;
    margin-bottom: 109px;
}
footer{
    background: url(imagini/footer.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

    height: 100vh;
}
    </style>
    <header>
        <div class="container d-flex justify-content-between">
            <div class="menu col">
                <div class="box">
                <img src="imagini/btn.png" />
                   
                </div>
                <ul >
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
            <div class="logo col">
                <h1>crios</h1>
            </div>
            <div class="search_bar col">
                <div class="box">
                    <img src="imagini/search.png" alt="">
                </div>

            </div>
            
        </div>
        <div class="header_info">
            <div class="container">
                <h1>Single PSD Template with Cool Stuff</h1>
            <p>Lorem Dolor Ipsum Sit Aamet</p>
            <div class="btns">explore template</div>
            </div>
        </div>
        <div class="wrapper"></div>
    </header>
    <<div class="cont">>
        <div class="wrapp">
            <div class="container">
                <p>Suspendisse vel leo efficitur, 
                    venenatis est ut, tincidunt nibh.</p>
                    <h1>Lorem Ipsum Dolor Sit Aamet</h1>
                <div class="text_box d-flex">
                    <div class="box col">
                        <img src="imagini/1.png" alt="">
                        <h5>Lorem Ipsum Dolor Sit Aamet</h5>
                        <p>Suspendisse vel leo efficitur, 
                            venenatis est ut, tincidunt nibh.</p>
                    </div>
                    <div class="box col">
                        <img src="imagini/2.png" alt="">
                        <h5>Lorem Ipsum Dolor Sit Aamet</h5>
                        <p>Suspendisse vel leo efficitur, 
                            venenatis est ut, tincidunt nibh.</p>
                    </div>
                    <div class="box col">
                        <img src="imagini/3.png" alt="">
                        <h5>Lorem Ipsum Dolor Sit Aamet</h5>
                        <p>Suspendisse vel leo efficitur, 
                            venenatis est ut, tincidunt nibh.</p>
                    </div>
                    <div class="box col">
                        <img src="imagini/4.png" alt="">
                        <h5>Lorem Ipsum Dolor Sit Aamet</h5>
                        <p>Suspendisse vel leo efficitur, 
                            venenatis est ut, tincidunt nibh.</p>
                    </div>
                </div>
                <div class="btns">explore template</div>
            </div>
        </div>
    </div>
    <div class="cont">
      @foreach($crioses as $item)
      
      <div class="wrapper_box ">
        
            <div class="pixis_img col">
                <img class="img_db" src="imagini/{{$item->img}}.png" alt="">
            </div>
            <div class="pixis_text col">
                <div class="text">
                    <h1>{{$item->titlu}}</h1>
                    <p>{{$item->descriere}}</p>
                    
                </div>
            </div>
        </div>
    
      @endforeach
        
    </div>
    <div class="cont">
        <div class="container">
            <div class="texttt d-flex">
                <div class="text_img col">
                    <img src="imagini/App-Screen.png" alt="">
                </div>
                <div class="text_info col">
                    <h1>Lorem Ipsum Dolor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel leo efficitur, venenatis est ut, tincidunt nibh. Suspendisse lobortis lectus vel imperdiet ullamcorper.</p>
                </div>
            </div>

    </div>
    <div class="cont_temp">
        <div class="cont">>
            <div class="container">
                <div class="header_info">
                    <div class="container">
                        <h1>Single PSD Template with Cool Stuff</h1>
                    <p>Lorem Dolor Ipsum Sit Aamet</p>
                    <div class="btns">explore template</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        
      
    </footer>
</body>
</html