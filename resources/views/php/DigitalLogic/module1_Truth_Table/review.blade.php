<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Review | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    <link rel="stylesheet" href="{{asset('css/modules/digilogic/mod1/review1.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 1: Truth Table</h1>

            <p>A truth table is a tool in logic that displays how the truth values of compound statements depend on the truth values of their constituent (simple) statements. We work in a two-valued logic system: every simple statement is either True (T) or False (F).</p>
            <p>Truth tables are used to analyze logical connectives like NOT (¬), AND (∧), OR (∨), Implication (→), and Biconditional (↔). They allow us to clearly see how compound statements behave under all possible combinations of inputs.</p>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <p>1. Identify the main logical connectives and their meaning:</p>
                <ul>
                    <li>Negation (¬)</li>
                    <li>Conjunction (AND, ∧)</li>
                    <li>Disjunction (OR, ∨)</li>
                    <li>Implication (if-then, →)</li>
                    <li>Biconditional (if and only if, ↔)</li>
                </ul>
                <p>2. Construct truth tables for simple logical connectives individually.</p>
                <p>3. Construct combined truth tables for compound logical statements by building intermediate columns.</p>
                <p>4. Interpret the result of a truth table to determine whether a given compound statement is true or false under specific assignments of the simple statements.</p>
                <p>5. Systematically list all possible assignments (combinations) of truth values for multiple simple statements (e.g. for two statements P, Q; or three, P, Q, R).</p>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Definitions and Behavior of Logical Connectives</h3>
                <table>
                    <tr>
                        <th>Connective</th>
                        <th>Symbol</th>
                        <th>Meaning / Truth Condition</th>
                    </tr>
                    <tr>
                        <td>Negation</td>
                        <td>¬P</td>
                        <td>True when P is False; False when P is True</td>
                    </tr>
                    <tr>
                        <td>Conjunction</td>
                        <td>P ∧ Q</td>
                        <td>True only when both P and Q are True; False otherwise</td>
                    </tr>
                    <tr>
                        <td>Disjunction (inclusive)</td>
                        <td>P ∨ Q</td>
                        <td>True when at least one of P or Q is True; False only if both are False</td>
                    </tr>
                    <tr>
                        <td>Implication</td>
                        <td>P → Q</td>
                        <td>False only when P is True and Q is False; True in all other cases</td>
                    </tr>
                    <tr>
                        <td>Biconditional</td>
                        <td>P ↔ Q</td>
                        <td>True when P and Q have the same truth value (both True or both False); False otherwise</td>
                    </tr>
                </table>

                <h3>Method for Constructing Truth Tables</h3>
                <ol>
                    <li>List the simple statements (P, Q, etc.).</li>
                    <li>Determine how many possible combinations of truth values there are: if there are n simple statements, there are 2ⁿ possible combinations.</li>
                    <li>Make a table with columns for each simple statement, then one column per logical subexpression you will need, ending with the column for the full compound statement.</li>
                    <li>Fill the rows systematically (often in lexicographic order: e.g. for two statements P, Q — (T, T), (T, F), (F, T), (F, F)).</li>
                    <li>Compute the truth value of each subexpression for each row, using the definitions above. Use those results to compute the truth value of the more complex expression.</li>
                </ol>

                <h3>Examples</h3>

                <h4>Negation (¬P)</h4>
                <table>
                    <tr><th>P</th><th>¬P</th></tr>
                    <tr><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td></tr>
                </table>
                <ul>
                    <li>If P is true, then ¬P is false.</li>
                    <li>If P is false, then ¬P is true.</li>
                </ul>

                <h4>Conjunction (P ∧ Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ∧ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>F</td><td>F</td></tr>
                </table>
                <ul>
                    <li>True only when both P and Q are true.</li>
                </ul>

                <h4>Disjunction (P ∨ Q) — Inclusive OR</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ∨ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>T</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>F</td></tr>
                </table>
                <ul>
                    <li>True when at least one of P or Q is true; false only when both are false.</li>
                </ul>

                <h4>Implication (P → Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P → Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td></tr>
                </table>
                <ul>
                    <li>False only when P is true and Q is false.</li>
                    <li>When P is false, the implication is always true, regardless of Q.</li>
                </ul>

                <h4>Biconditional (P ↔ Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ↔ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td></tr>
                </table>
                <ul>
                    <li>True exactly when P and Q have the same truth value.</li>
                </ul>

                <h4>Compound Statement Example</h4>
                <p>Construct the truth table for: ¬P ∧ (P → Q)</p>

                <ol>
                    <li>List all combinations for P, Q (4 combinations).</li>
                    <li>Compute ¬P.</li>
                    <li>Compute P → Q.</li>
                    <li>Finally compute ¬P ∧ (P → Q).</li>
                </ol>

                <table>
                    <tr><th>P</th><th>Q</th><th>¬P</th><th>P → Q</th><th>¬P ∧ (P → Q)</th></tr>
                    <tr><td>T</td><td>T</td><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td><td>T</td><td>T</td></tr>
                </table>
                <ul>
                    <li>The final column shows when the compound statement ¬P ∧ (P → Q) is true vs false.</li>
                </ul>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://sites.millersville.edu/bikenaga/math-proof/truth-tables/truth-tables.html" target="_blank">https://sites.millersville.edu/bikenaga/math-proof/truth-tables/truth-tables.html</a></li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.php?module=0" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=0" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>
</html>
