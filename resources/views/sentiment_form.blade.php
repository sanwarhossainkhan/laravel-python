<!DOCTYPE html>
<html>
<head>
    <title>Sentiment Analysis</title>
</head>
<body>
<form method="post" action="{{ route('analyze-sentiment') }}">
    @csrf
    <label for="text">Enter Text:</label>
    <input type="text" name="text">
    <button type="submit">Analyze</button>
</form>
</body>
</html>
