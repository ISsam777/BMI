<form method="POST">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" required class="form-control" />
    </div>
    <div class="form-group">
        <label>Weight (kg):</label>
        <input type="number" name="weight" step="0.1" required class="form-control" />
    </div>
    <div class="form-group">
        <label>Height (cm):</label>
        <input type="number" name="height" step="0.1" required class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Calculate BMI</button>
</form>

