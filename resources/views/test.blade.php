<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
          <h2>Settings</h2>
        </div>
        <div class="small-container">
          <div class="info-container">
            <div class="user-info">
              <div class="user-input">
                <label>First Name</label>
                <input type="text" placeholder="Piter">
              </div>        
              <div class="user-input">
                <label>Last Name</label>
                <input type="text" placeholder="Willsen">
              </div>
              <div class="user-input">
                <label>Email</label>
                <input type="text" placeholder="someone@gmail.com">
              </div>
              <div class="user-input">
                <label>Phone number</label>
                <input type="text" placeholder="+998">
              </div>
              <div class="user-input">
                <label>Password</label>
                <input type="text" placeholder="something">
              </div>
              <div class="user-input">
                <label> Telegram </label>
                <input type="text" placeholder="@Username">
              </div>
              <div class="user-input">
                <label> GitHub </label>
                <input type="text" placeholder="@Username">
              </div>
              <div class="user-input">
                <label> Birth Date</label>
                <input type="text" placeholder="dd-mm-yyyy">
              </div>
            </div>
            <div class="user-buttons">
              <button class="update-btn">Update</button>
              <button class="cancel-btn">Cancel</button>
            </div>
          </div>
          <div class="image-container">
            <div class="image-section">
              <div class="user-image">
                <img src="../assets/unknown.png">
              </div>
              <h4 class="user-name">Someone</h4>
            </div>
            <div class="upload-image">
              <label for="file-input" class="upload-btn">
                <i class="fas fa-upload"></i> Upload
              </label>
              <input id="file-input" type="file" style="display: none;">
            </div>
          </div>
        </div>
      </div>
      <style>
        .container {
  font-family: "Poppins", "sans-serif";
  overflow-y: hidden;
  overflow-x: hidden;
}

.header {
  display: flex;
  padding-top: 28px;
  justify-content: space-between;
}

h2 {
  font-family: "Poppins", "sans-serif";
  color: #444444;
  margin-left: 25px;
}

.small-container {
  display: flex;
  width: 100%;
  margin-top: 30px;
}

.info-container {
  display: flex;
  flex-direction: column;
  margin: 20px;
  padding: 18px;
  justify-content: center;
  flex-basis: 80%;
}

.user-info {
  display: flex;
  flex-wrap: wrap;
}

.user-input {
  width: 50%;
  margin-bottom: 40px;
  padding-right: 15px;
}

label {
  font-size: 16px;
  color: #444444;
  margin-left: 3px;
}

input[type="text"],
textarea {
  width: 100%;
  height: 40px;
  padding: 10px;
  color: #555;
  border: 1px solid #CCCCCC;
  border-radius: 15px;
  font-size: 14px;
  outline: rgb(67, 97, 238);
  background-color: #f2f3f6;
}

input[type="text"]:hover,
textarea:hover,
input[type="text"]:focus,
textarea:focus {
  border: 0.5px solid rgba(67, 97, 238, 1);
}

.user-buttons {
  position: relative;
  display: flex;
  height: 40px;
  flex-direction: row;
}

.update-btn,
.cancel-btn {
  padding: 8px 10px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

.update-btn {
  background-color: #FFB93E;
  color: white;
  margin-right: 10px;
}

.cancel-btn {
  background-color: red;
  color: white;
}

.update-btn:hover {
  background-color: white;
  color: #FFB93E;
  border: 1px solid #FFB93E;
}

.cancel-btn:hover {
  background-color: white;
  color: red;
  border: 1px solid red;
}

.image-container {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 20px;
  flex-basis: 30%;
  top: 120px;
  height: 250px;
  margin-left: -20px;
}

.image-section {
  text-align: center;
}

.user-image img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.user-name {
  color: #444444;
  font-size: 18px;
  margin-top: 9px;
}

.upload-image {
  margin-top: 20px;
}

.upload-btn {
  padding: 8px 10px;
  background-color: #4361ee;
  color: white;
  border-radius: 15px;
  cursor: pointer;
}

.upload-btn:hover {
  background-color: white;
  color: #4361ee;
  border: 1px solid #4361ee;
}
      </style>      
</body>
</html>