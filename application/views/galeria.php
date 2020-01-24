<style type="text/css">
   *{
    margin: 0;
    padding: 0 0 0 10px;
   }

   ul{
    width: 880px;
    list-style:none;
    display: flex;
    margin: 100px auto;
   }

   .min{
    width: 200px;
    display: block;
   }

   .lbox{
    visibility: hidden;
    opacity: 0;
   }

   .lbox:target{
    opacity: 1;
    visibility: visible;
    width: 100%;
    height: 100%;
    top:0;
    left:0;
    background: rgba(10,10,10,0.7);
    position:fixed;
   }

   .box_img {
    width: 1000px;
    margin: 0px auto;
   }

   .btn{
    color: #fff;
    font-family: 'Arial';
    text-decoration: none;
    position: absolute;
    width: 50px;
    height: 50px;
    font-size: 40px;
    text-align: center;
   }

   #prev {
    left: 5%;
    top: 45%;
   }

   #next {
    right: 5%;
    top: 45%;
   }

   #close {
    right: 2%;
    top: 0;
   }

   .box_img img{
    opacity: 0;
   }

   .lbox:target .box_img img{
    width: 80%;
    margin-left: 100px;
    margin-top: 60px;
    opacity: 1;
    transition: opacity .4s linear;
   }

  </style>
  <ul>
   <li><a href="#img1"><img src="<?=base_url()?>content/imagens/1slide - Copia.jpg" class="min"></a></li>
   <li><a href="#img2"><img src="img/02.jpg" class="min"></a></li>
   <li><a href="#img3"><img src="img/03.jpg" class="min"></a></li>
   <li><a href="#img4"><img src="img/04.jpg" class="min"></a></li>
  </ul>

  <div class="lbox" id="img1">
   <div class="box_img">
    <a href="#img4" class="btn" id="prev">&#171;</a>
    <a href="" class="btn" id="close">X</a>
    <img src="<?=base_url()?>content/imagens/1slide - Copia.jpg">
    <a href="#img2" class="btn" id="next">&#187;</a>
   </div>
  </div>

  <div class="lbox" id="img2">
   <div class="box_img">
    <a href="#img1" class="btn" id="prev">&#171;</a>
    <a href="" class="btn" id="close">X</a>
    <img src="img/02.jpg">
    <a href="#img3" class="btn" id="next">&#187;</a>
   </div>
  </div>

  <div class="lbox" id="img3">
   <div class="box_img">
    <a href="#img2" class="btn" id="prev">&#171;</a>
    <a href="" class="btn" id="close">X</a>
    <img src="img/03.jpg">
    <a href="#img4" class="btn" id="next">&#187;</a>
   </div>
  </div>

  <div class="lbox" id="img4">
   <div class="box_img">
    <a href="#img3" class="btn" id="prev">&#171;</a>
    <a href="" class="btn" id="close">X</a>
    <img src="img/04.jpg">
    <a href="#img1" class="btn" id="next">&#187;</a>
   </div>
  </div>
