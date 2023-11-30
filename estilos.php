html,body{
    margin: 0;
    padding: 0;
}

body{
    width: 100%;
    height: 100%;
    font-family: sans-serif;
    letter-spacing: 0.03em;
    line-height: 1.6;

}

.title{
    text-align: center;
    font-size: 40px;
    color: #6a6a6a;
    margin-top: 100px;
    font-weight: 100;

}

.container{
    width: 100%;
    max-width: 1200px;
    height: 430px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}

.container .card{
    width: 330px;
    height: 430px;
    border-radius:8px;
    box-shadow: 0 2px 2px rgb(0 ,0 ,0 ,0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
}

.container .card:hover{
transform: translateY(-15px);
box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);

}

.container .card img{
    width: 330px;
    height: 220px;

}
.container .card h1{
    font-weight: 600;
}

.container .card p{
    padding: 0 1rem;
    font-size: 16px;
    font-weight: 300;

}

.container .card a{
    font-style: 500;
    text-decoration: none;
    color: blue;
}