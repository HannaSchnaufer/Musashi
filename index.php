<!DOCTYPE html>
<html>
<head>
	<title>Kontakt ERA</title>
</head>
<body>
	<main>
		<style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f4f4f4;
}

main {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

p {
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
    text-align: center;
}

.contact-form {
    display: flex;
    flex-direction: column;
}

.form-input, .form-textarea {
    background-color: #6a0dad;
    color: #fff;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 1em;
}

.form-textarea {
    min-height: 100px;
    resize: vertical;
}

.form-button {
    background-color: #4a0c87;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
}

.form-button:hover {
    background-color: #5e0da6;
}

		</style>
		<p>Send E-Mail</p>
		<form class="contact-form" action="contact-form.php" method="post">
			<input type="text" name="name" placeholder="Fullname">
			<input type="text" name="mail" placeholder="ident your e-mail">
			<input type="text" name="subjek" placeholder="subjek">
			<textarea name="message" placeholder="message"></textarea>
			<button type="submit" name="submit">Send</button>
		</form>
	</main>
</body>
</html>