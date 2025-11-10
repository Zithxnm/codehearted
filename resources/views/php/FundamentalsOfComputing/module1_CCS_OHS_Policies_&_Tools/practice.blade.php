<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    <link rel="stylesheet" href="../module1_CCS_OHS_Policies_&_Tools/practice1.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. TRUE or FALSE</h2>
                <p class="instruction">Write T if the statement is correct and F if it is incorrect.</p>

                <table class="match-table">
                    <tr>
                        <td>
                            <input type="text" onkeydown="return /[t/f]/i.test(event.key)" maxlength="1" class="answer-input small">
                            An anti-static wrist strap prevents static electricity that can damage sensitive computer parts.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" onkeydown="return /[t/f]/i.test(event.key)" maxlength="1" class="answer-input small">
                            A multimeter is used to check if network cables are working properly.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" onkeydown="return /[t/f]/i.test(event.key)" maxlength="1" class="answer-input small">
                            Tweezers are used to handle small components like screws and jumpers.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" onkeydown="return /[t/f]/i.test(event.key)" maxlength="1" class="answer-input small">
                            A compressed air canister should always be used upright to avoid releasing moisture.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" onkeydown="return /[t/f]/i.test(event.key)" maxlength="1" class="answer-input small">
                            A bootable flash drive is used to install or troubleshoot an operating system.
                        </td>
                    </tr>
                </table>
            </div>


            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Identification</h2>

                <div class="code-block">
                    <pre><code>What does PPE stand for?</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your answer here..."></textarea>

                <div class="code-block">
                    <pre><code>What PPE should you wear to prevent static electricity?</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your answer here..."></textarea>

                <div class="code-block">
                    <pre><code>What does PPE stand for? </code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your answer here..."></textarea>

            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

</body>

<style>
    .answer-input.small {
        width: 2rem;
        text-align: center;
        border: 1px solid #fbbf24;
        border-radius: 4px;
        margin-right: 0.5rem;
        font-weight: bold;
    }

    .match-table td {
        padding: 0.5rem 1rem;
    }
</style>


</html>