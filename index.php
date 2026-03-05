<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Generador Web IA</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="content">

<h1 id="title">Aetheron - Generador IA</h1>

<h2 id="subtitle">Generador Web con IA (Gemini)</h2>

<div id="content-prompt">

<textarea id="prompt" rows="6" cols="60">
Crea una landing page moderna con navbar y sección de servicios.
</textarea>

</div>

<div id="bt-generar">
<button onclick="generar()">Generar</button>
</div>

<hr>

<div>
    <a href="test.php">Test</a>
</div>

<iframe id="preview"></iframe>

<script>
async function generar() {
    const prompt = document.getElementById("prompt").value;

    const response = await fetch("backend.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ prompt: prompt })
    });

    const html = await response.text();
    document.getElementById("preview").srcdoc = html;
}
</script>
</div>
</body>
</html>