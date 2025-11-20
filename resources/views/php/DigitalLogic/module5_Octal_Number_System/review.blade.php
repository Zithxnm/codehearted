<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Review | CodeHearted</title>
    <meta name="description" content="Lesson 5: Octal Number System">
    @vite('resources/css/modules/digilogic/mod5/review5.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 5: Octal Number System</h1>
            <p>
                The octal number system (base-8) is a positional numeral system that uses eight digits: 0, 1, 2, 3, 4, 5, 6, 7.
                It is similar in structure to decimal (base-10), binary (base-2), and hexadecimal (base-16), but its base is 8.
                It is used in computing (historically for permissions in Unix, for grouping binary digits, etc.), mathematics,
                and in conversion examples.
            </p>
            <p>In octal, each position represents a power of 8. For example, in the octal number (215)<sub>8</sub>, the digits stand for:</p>
            <ul>
                <li>The “ 8² ” place</li>
                <li>The “ 8¹ ” place</li>
                <li>The “ 8⁰ ” place</li>
            </ul>
            <p>
                Octal ↔ Decimal conversion, also Octal ↔ Binary conversion, are important for computer science and mathematics.
            </p>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students will be able to:</p>
                <ul>
                    <li>Define the octal number system, including what base-8 means and which digits are valid.</li>
                    <li>Convert an octal number to its decimal equivalent (including integer and fractional parts).</li>
                    <li>Convert a decimal number to octal.</li>
                    <li>Understand how to convert between octal and binary.</li>
                    <li>Apply the octal system in example problems, showing understanding of positional notation with powers of 8.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>
                <ul>
                    <li>Definition of octal, base-8, valid digits (0-7).</li>
                    <li>Positional notation: powers of 8.</li>
                    <li>Methods of conversion:
                        <ul>
                            <li>Octal to Decimal (multiplying each digit by the appropriate power of 8, summing).</li>
                            <li>Decimal to Octal (repeated division by 8, noting remainders, reading in reverse).</li>
                            <li>Octal ↔ Binary conversions (grouping or expanding).</li>
                        </ul>
                    </li>
                    <li>Examples with both integer and fractional parts.</li>
                    <li>Practice problems and step-by-step worked examples.</li>
                </ul>

                <h3>Detailed Explanation & Examples</h3>

                <h4>Definition & Valid Digits</h4>
                <ul>
                    <li>Octal is base-8, meaning each digit position represents powers of 8 (8⁰, 8¹, 8², 8³, …).</li>
                    <li>Digits allowed are 0, 1, 2, 3, 4, 5, 6, 7. No digit “8” or “9” can appear in a pure octal number.</li>
                </ul>

                <h4>Converting Octal to Decimal</h4>
                <p>To convert an octal integer (or with fraction) to decimal:</p>
                <ol>
                    <li>Write the number. Label each digit with its place value: starting from the rightmost digit as 8⁰, then 8¹, 8², etc. For fractional parts, positions after the “octal point” use negative powers: 8⁻¹, 8⁻², etc.</li>
                    <li>For each digit, multiply that digit by its corresponding power of 8.</li>
                    <li>Sum all those products.</li>
                </ol>

                <p><strong>Example 1:</strong> Convert (215)<sub>8</sub> to decimal:</p>
                <p>(215)<sub>8</sub> = 2×8² + 1×8¹ + 5×8⁰ = 128 + 8 + 5 = 141<sub>10</sub></p>

                <p><strong>Example 2 (with fraction):</strong> Convert (246.28)<sub>8</sub> to decimal:</p>
                <p>2×8² + 4×8¹ + 6×8⁰ + 2×8⁻¹ + 8×8⁻²</p>
                <ul>
                    <li>8² = 64, 8¹ = 8, 8⁰ = 1</li>
                    <li>8⁻¹ = 1/8, 8⁻² = 1/64</li>
                </ul>
                <p>
                    So: 2×64 + 4×8 + 6×1 + 2×(1/8) + 8×(1/64) = 128 + 32 + 6 + 0.25 + 0.125 = 166.375<sub>10</sub>
                </p>

                <h4>Converting Decimal to Octal</h4>
                <ol>
                    <li>Divide the decimal number by 8.</li>
                    <li>Record the remainder.</li>
                    <li>Repeat dividing the quotient by 8 until it becomes zero.</li>
                    <li>The octal representation is the remainders read from last to first.</li>
                </ol>

                <p><strong>Example:</strong> Convert 100<sub>10</sub> to octal:</p>
                <ul>
                    <li>100 ÷ 8 = 12 remainder 4</li>
                    <li>12 ÷ 8 = 1 remainder 4</li>
                    <li>1 ÷ 8 = 0 remainder 1</li>
                </ul>
                <p>Reading remainders (bottom to top): (144)<sub>8</sub></p>

                <p>
                    For decimals (fractional part), multiply the fractional part by 8, take the integer part,
                    then continue with the new fractional remainder.
                </p>

                <h4>Octal ↔ Binary Conversion</h4>
                <p>Since 8 = 2³, one octal digit corresponds to exactly three binary digits (bits).</p>
                <ul>
                    <li>To convert binary to octal: group bits in sets of 3 (from right for integer part, left for fractional part). Pad with zeros if needed.</li>
                    <li>To convert octal to binary: replace each octal digit with its 3-bit binary equivalent.</li>
                </ul>

                <p><strong>Example:</strong> Convert (57)<sub>8</sub> to binary:</p>
                <ul>
                    <li>5 → 101</li>
                    <li>7 → 111</li>
                </ul>
                <p>(57)<sub>8</sub> = (101111)<sub>2</sub></p>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://byjus.com/maths/octal-number-system/" target="_blank">BYJU'S: Octal Number System</a></li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.php?module=5" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=5" class="action-button" style="margin-left: 8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
