<template>

<div class="card-portofolio">
    <img src="@/assets/img/portfolio-1.jpg" alt="">
    <div class="card-portofolio-description">
        <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h4>
        <p><span>Klient : </span> Yudistira</p>
    </div>
</div>

</template>


<style>

.card-portofolio{
    text-align: start;
    min-height: 306px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    border-radius: 60px 0 0 0;
    background: white;
    transition: all 0.5 ease;
    margin: 10px 10px;
}

.card-portofolio img{
    max-width: 100%;
    height: auto;
}
.card-portofolio-description{
    padding: 0 20px 20px 20px ;
}
.card-portofolio h4{
    margin-top: 10px;
    font-weight: 900;
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 0;
    color: #042181;
}
</style>