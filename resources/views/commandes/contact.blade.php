<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="card">
     <h3>Our Newsletter</h3> 
     <form onclick="return false;"> 
        <div class="inputbox">
             <input type="text" name="name" class="form-control" required="required"> 
             <span>Nom</span> 
            </div>
             <div class="inputbox">
                 <input type="text" name="name" class="form-control" required="required"> 
                 <span>Prenom</span> 
                </div>
                 <div class="inputbox"> 
                    <input type="text" name="name" class="form-control" required="required">
                     <span>Phone</span>
                     </div>
                      <button class="btn btn-danger btn-block">Send</button>
                     </form> 
                    </div>
                    <style>
                        body{height: 100vh;display: flex;justify-content: center;align-items: center;background: linear-gradient(45deg,#e43a15,#e65245)}.card{width: 400px;padding: 80px 50px;position: relative;border-radius: 20px;box-shadow: 0 5px 25px rgba(0,0,0,0.2)}.card h3{color: #111;margin-bottom: 50px;border-left: 5px solid red;padding-left: 10px;line-height: 1em}.inputbox{margin-bottom: 50px}.inputbox input{position:absolute;width: 300px;background:transparent}.inputbox input:focus{color: #495057;background-color: #fff;border-color: #e54b38;outline: 0;box-shadow: none}.inputbox span{position: relative;top: 7px;left: 1px;padding-left: 10px;display: inline-block;transition: 0.5s}.inputbox input:focus ~ span{transform: translateX(-10px) translateY(-32px);font-size: 12px}.inputbox input:valid ~ span{transform: translateX(-10px) translateY(-32px);font-size: 12px}
                    </style>
</body>
</html>