@section('content')

<!--
@media only screen and (max-device-width: 480px) {
  .box {
    margin: 20px;
  }
  .product-info {
    margin: 20px;
  }
}


.container {
  display: flex;
  justify-content: center;
  margin-top: 50px;
  font-family: 'Open Sans', sans-serif;
}


.box {
  width: 700px;
  border-radius: 10px;
  box-shadow: 0 0 30px 0 #999; 
}

.product-img {
  float: left;
  margin-top: 20px;
  transition: all 0.5s linear;
  &:hover {
    transform: scale(1.03);
  }
}


.product-info {
  float: right;
  margin-top: 20px;
  margin-right: 40px;
}

h1 {
  margin-bottom: 50px;
  font-weight: bold;
  font-size: 2.5em;
  color: #333;
  font-family: 'Archivo Black', sans-serif;
}

.price {
  margin-top: -40px;
  font-size: 35px;
  font-weight: bolder;
  color: coral;
}

.description {
  margin-top: -20px;
  margin-right: 10px;
  font-weight: bold;
  color: #555;
}
.color {
  margin-top: 25px;
  outline: none;
  border: 2px solid #999;
  padding: 5px;
  border-radius: 5px;
}

.qty {
   margin-top: 25px;
  outline: none;
  border: 2px solid #999;
  padding: 5px;
  border-radius: 5px;
}
button {
  margin-top: 10px;
  background: #333;
  font-size: 1em;
  letter-spacing: .1em;
  text-decoration: none;
  color: #fff;
  padding: 15px 30px;
  border: 0;
  border-radius: 10px;
  transition: all 0.3s linear;
  margin-left: 50px;
   &:hover {
    background: #666;
  }
}-->

<div class="container">
  <div class="box">
    <div class="product-img">
      <img src="{{$prenda -> foto}}" width="250" alt="" />
    </div>
    <div class="product-info">
      <h3>Nueva Prenda</h3>
      <p class="price">{{$prenda->estilo}}</p>
      <p class="description">{{$prenda->temporada}}</p>
      <p>Color:{{$color->color}}</p>

      <br /><br />
      <button>Ok!</button>
      <button>Modificar</button>
    </div>
  </div>
</div>


@endsection