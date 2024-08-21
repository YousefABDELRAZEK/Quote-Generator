<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Generator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<style>
    body{
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2980B9;  
background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
.d1{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 0px solid black;
    padding: 50px;
    height: 380px;
    width: 1000px;
    border-radius: 30px;
    flex-direction: column;
    background-color: #e0f6fe;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;

}
h2{
    font-weight: 700;
    font-size: 3rem;
    margin-top: -60px;
}
p{
    margin-top: 50px;
    font-size: 2rem;
    color: #6b6868;
    text-align: center;
}

.button {
    cursor: pointer;
    margin-top: 50px;
    padding: 20px;
    width: 190px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 20px;
    border-style: double;
    border-color: rgba(74, 61, 255, 0.753);
  
    color: rgba(126, 185, 236, 0.968);
    background-image: linear-gradient(to right, rgb(14, 15, 58), rgb(49, 3, 118));
    transition: 300ms;
  }
  .button:hover {
    border-color: rgb(100, 43, 215);
    border-top-right-radius: 5%;
    border-bottom-left-radius: 5%;
  
    box-shadow: 0px 5px 10px 1px rgb(0, 0, 0);
    font-size: 22px;
    transition: 400px;
  }
  .svg {
    height: 20px;
  }
  
</style>
<body>
    <div class="d1">
<h2>Quote Generator</h2>
<p>{{$quote}}</p>

<button class="button" type="submit"  onclick="window.location.reload();">
  <svg viewBox="0 0 576 512" class="svg" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z"
      fill="#74C0FC"
    ></path>
  </svg>
 Generate
</button>

    </div>
    
</body>
</html>