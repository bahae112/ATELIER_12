<div class="register">
    <h2>Register</h2>
    <form action="index.php?controller=user&action=register" method="POST">
        <div class="form-group">
            <label for="pseudo">Pseudo:</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="visibility">Visibility:</label>
            <input type="text" class="form-control" id="visibility" name="visibility" required>
        </div>
        <div class="form-group">
            <label for="site">Site:</label>
            <input type="text" class="form-control" id="site" name="site" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
