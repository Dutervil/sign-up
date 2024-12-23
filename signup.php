<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-up</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <div class="container">
    <header>Sign-Up</header>
    <p>already have an account? <a href="login.php">login</a></p>

    <div class="progress-bar">
      <div class="step">
        <div class="name">Name</div>
        <div class="number"><span>1</span></div>
        <i class='fas fa-check'></i>
      </div>
      <div class="step ">
        <div class="name">Contact</div>
        <div class="number"><span>2</span></div>
        <i class='fas fa-check'></i>
      </div>
      <div class="step">
        <div class="name">Birth</div>
        <div class="number"><span>3</span></div>
        <i class='fas fa-check'></i>
      </div>
      <div class="step">
        <div class="name">Submit</div>
        <div class="number"><span>4</span></div>
        <i class='fas fa-check'></i>
      </div>
    </div>
    <div class="form-outer">
      <form method="post">
        <div class="slide">
          <div class="title">Basic info :</div>
          <div class="field">
            <div class="label">First Name</div>
            <input type="text" name="firstname" placeholder="John">
          </div>
          <div class="field">
            <div class="label">Last Name</div>
            <input type="text" name="lastname" placeholder="Paul">
          </div>
          <div class="field">
            <div class="label">Other Names</div>
            <input type="text" name="othernames" placeholder="McTony">
          </div>
          <div class="field">
            <button type="button" class="next">Next</button>
          </div>
        </div>

        <div class="slide">
          <div class="title">Contact info :</div>
          <div class="field">
            <div class="label">Email Addresss</div>
            <input type="email" name="email" placeholder="e.g. stephenking@lorem.com">
          </div>
          <div class="field">
            <div class="label">Phone Number</div>
            <input type="tel" name="number" placeholder="e.g. +1 234 567 890">
          </div>
          <div class="field">
            <div class="label">Home Address</div>
            <input type="text" name="address" placeholder="#123 B cambrige street">
          </div>
          <div class="field btns">
            <button type="button" class="prev">Previous</button>
            <button type="button" class="next">Next</button>
          </div>
        </div>

        <div class="slide">
          <div class="title">Date of Birth :</div>
          <div class="field">
            <div class="label">Date</div>
            <input type="date" name="birthdate">
          </div>
          <div class="field">
            <div class="label">Gender</div>
            <select name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Country</div>
            <select name="country">
              <option>America</option>
              <option>Nigeria</option>
              <option>Ghana</option>
            </select>
          </div>
          <div class="field btns">
            <button type="button" class="prev">Previous</button>
            <button type="button" class="next">Next</button>
          </div>
        </div>

        <div class="slide">
          <div class="title">Login Details :</div>
          <div class="field">
            <div class="label">Username</div>
            <input type="text" name="username" placeholder="stephen23">
          </div>
          <div class="field">
            <div class="label">Password</div>
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="field">
            <div class="label">Confirm Password</div>
            <input type="password" name="cpassword" placeholder="Confirm Password">
          </div>
          <div class="field btns">
            <button type="button" class="prev">Previous</button>
            <button type="submit" class="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <script src="main.js"></script>
</body>

</html>