   <style>
.counter{
    font-family: 'Open Sans', sans-serif;
    color: #fff;
    background: #fff;
    text-align: center;
    width: 190px;
    padding: 25px 30px 10px;
    margin: 0 auto;
    border-radius: 30px 0 ;
    box-shadow: 10px 10px 0 rgba(0,0,0,0.05);
    position: relative;
    z-index: 1;
}
.counter:before{
    content: "";
    background: #51d658;
    border-radius: 15px 0 30px 0;
    box-shadow: inset 0 4px 8px rgba(0,0,0,0.15);
    position: absolute;
    top: 12px;
    left: 12px;
    right: 12px;
    bottom: 27px;
    z-index: -1;
}
.counter .counter-icon{
    font-size: 35px;
    margin: 0 0 10px;
    transform: rotateX(0deg);
    transition: all 0.3s ease 0s;
}
.counter:hover .counter-icon{
    transform: rotateX(360deg);
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
}
.counter h3{
    font-size: 17px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 20px;
}
.counter .counter-value{
    color: #666;
    background: #fff;
    font-size: 33px;
    font-weight: 600;
    text-align: right;
    line-height: 60px;
    width: 90%;
    height: 50px;
    padding: 0 15px;
    margin: 0 0 0 -20px;
    display: block;
}
.counter.pink:before{ background-color: #FF5D94; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}

    </style>
