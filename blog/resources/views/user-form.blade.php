<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h2>Add New User</h2>
    <form action="adduser" method="post">
      @csrf
      <div>
        <input type="text" placeholder="Enter your name" name="username">
        <br>
        <span style="color:red;">@error('username'){{$message}}@enderror</span>
        <br>
        <br>
        <input type="text" placeholder="Enter your email" name="email">
        <br>
        <span style="color:red;">@error('email'){{$message}}@enderror</span>
        <br>
        <br>
        <input type="text" placeholder="Enter your city" name="city">
        <br>
        <span style="color:red;">@error('city'){{$message}}@enderror</span>


        <h5>User Skills</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="Node" id="node">
        <label for="node">Node</label>
        <input type="checkbox" name="skill[]" value="JavaScript" id="javascript">
        <label for="javascript">JavaScript</label>
        <br>
        <span style="color:red;">@error('skill'){{$message}}@enderror</span>

        <h5>Gender</h5>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label>

        <h5>City</h5>
        <select name="city">
          <option value="Delhi">Delhi</option>
          <option value="Noida">Noida</option>
          <option value="Ghaziabad">Ghaziabad</option>
        </select>
        
        <h5>Age</h5>
        <input type="range" min="18" max="60" name="range">
        
        <br>
        <br>
        <button>Add new user</button>
      </div>
    </form>
</div>
