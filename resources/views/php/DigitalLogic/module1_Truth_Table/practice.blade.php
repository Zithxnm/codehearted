<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    @vite('resources/css/modules/digilogic/mod1/practice1.css')
</head>

<body>

    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Practice Problems</h1>

            <div class="lesson-section">
                <h2 class="section-heading">Practice 1 – Construct a Truth Table</h2>
                <p>Complete the truth table for the expression:</p>
                <p><strong>P ∨ ¬Q</strong></p>

                <table>
                    <tr>
                        <th>P</th>
                        <th>Q</th>
                        <th>¬Q</th>
                        <th>P ∨ ¬Q</th>
                    </tr>
                    <tr>
                        <td>T</td>
                        <td>T</td>
                        <td></td>
                        <td>T</td>
                    </tr>
                    <tr>
                        <td>T</td>
                        <td></td>
                        <td>T</td>
                        <td>T</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>T</td>
                        <td></td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td></td>
                        <td>T</td>
                        <td></td>
                    </tr>
                </table>
                <textarea name="q1" placeholder="Write your answer here..."><?php if (isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>
            <div class="lesson-section">
                <h2 class="section-heading">Practice 2 – Three Variables</h2>
                <p>Create a full truth table for:</p>
                <p><strong>(P → Q) ∧ (Q → R)</strong></p>
                <p class="hint">(Hint: you will need 8 rows, since there are 3 variables.)</p>
            </div>
            <textarea name="q1" placeholder="Write your answer here..."><?php if (isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
        </section>
    </main>

</html>
