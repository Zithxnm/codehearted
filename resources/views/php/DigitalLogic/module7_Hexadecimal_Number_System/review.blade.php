<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7 Review | CodeHearted</title>
    <meta name="description" content="Lesson 7: Hexadecimal Number System (Base-16)">
    @vite('resources/css/modules/digilogic/mod7/review7.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 7: Hexadecimal Number System (Base-16)</h1>
            <p>Hexadecimal (often called “hex”) is a positional numeral system with base 16. It uses 16 distinct symbols:</p>
            <ul>
                <li>The digits 0–9 represent values 0 through 9</li>
                <li>The letters A, B, C, D, E, F represent values 10 through 15 </li>
            </ul>
            <p>Each place (digit) in a hexadecimal number represents a power of 16, depending on its position. Because of its compactness and clear relationship with binary, hexadecimal is widely used in computing (for example, color codes in web design, memory addresses, and low-level programming)</p>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students will be able to:</p>
                <ul>
                    <li>Define the hexadecimal number system and name all of its valid symbols (0-9, A-F).</li>
                    <li>Interpret the value of a hexadecimal number by understanding positional weights (powers of 16).</li>
                    <li>Convert numbers:</li>
                    <ul>
                        <li>From hexadecimal → decimal </li>
                        <li>From decimal → hexadecimal </li>
                        <li>Between hexadecimal and binary </li>
                    </ul>
                    <li>Handle fractions (hexadecimal numbers with “hexadecimal point”) and understand place values to the right of the “point”.li>
                    <li>Apply hexadecimal conversions in practical contexts (e.g. digital systems, color encoding).li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>
                    <ul>
                        <li>Hexadecimal definitions: base, valid digits, positional value.</li>
                        <li>Hexadecimal definitions: base, valid digits, positional value.</li>
                        <li>Methods:</li>
                        <ul>
                            <li>Hexadecimal to decimal (multiplying digits by powers of 16).</li>
                            <li>Decimal to hexadecimal (repeated division by 16, collecting remainders).</li>
                            <li>Hexadecimal ↔ binary (grouping binary digits into 4 bits = 1 hex digits, or vice versa).</li>
                            <li>Handling fractional parts: place values right of the hexadecimal point (16⁻¹, 16⁻², etc.)..</li>
                        </ul>
                        <li>Examples, both integer and with "hex point".</li>
                        <li>Practice problems.</li>
                    </ul>

                    <h3>Detailed Explanation & Examples</h3>
                    <h4>Valid Symbols and Positional Value</h4>

                <ul>
                    <li>Symbols: <strong>0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F</strong></li>
                    <li>A means 10, B means 11, …, F means 15. </li>
                    <li>Each place (from rightmost digit) has weight: 16⁰ (units), 16¹, 16², etc.</li>
                    <li>For fractional parts (digits after the “hex point”), positions are 16⁻¹, 16⁻², etc.</li>
                </ul>

                <h4>Conversion: Hexadecimal → Decimal</h4>
                <p>To convert a hex number to decimal:</p>

                <p>1.	Write each digit. Replace A–F with 10–15.</p>
                <p>2.	Multiply each digit by 16 raised to the power of its position (position counting from 0 on right).</p>
                <p>3.	Sum all these products.</p>
                <p><strong>Example:</strong> Convert 3Ε5_16  to decimal.</p>
                <ul>
                    <li>3 × 16² = 3 × 256 = 768 </li>
                    <li>E (which is 14) × 16¹ = 14 × 16 = 224 </li>
                    <li>5 × 16⁰ = 5 × 1 = 5 </li>
                    <p>Sum: <strong>768 + 224 + 5 = 997₁₀</strong></p>
                </ul>

                 <h4>Conversion: Decimal → Hexadecimal</h4>
                 <p>To convert a decimal integer to hexadecimal:</p>
                <ul>
                    <li>Divide the decimal number by 16.</li>
                    <li>Record the remainder (0-15). If remainder ≥ 10, use A-F. </li>
                    <li>Take the quotient and repeat dividing by 16 until quotient is 0.</li>
                    <li>The hexadecimal number is the remainders read bottom up (from last division to first).</li>
                </ul>
                <p>Example: Convert 75410754₁₀75410 to hexadecimal.</p>

                <ul>
                    <li>754 ÷ 16 = 47 remainder 2</li>
                    <li>47 ÷ 16 = 2 remainder 15 → remainder 15 = F</li>
                    <li>2 ÷ 16 = 0 remainder 2 </li>
                    <p>Reading from bottom up: 2F2₁₆</p>
                </ul>

                <h4>Hexadecimal ↔ Binary</h4>
                <p>Because 16=2416 = 2^416=24, each hex digit corresponds exactly to 4 binary digits (bits).</p>
                <ul>
                    <li>To convert binary → hex: group binary digits in sets of 4 (from right for integer part, pad with leading zeros if needed), then convert each group to its hex digit.</li>
                    <li>To convert hex → binary: convert each hex digit into its 4-bit binary equivalent.</li>
                    <p>Example: Hex A3F_16 → binary:</p>
                    <li>A → 1010</li>
                    <li>3 → 0011</li>
                    <li>F → 1111</li>
                    <p>So: A3F<sub>16</sub>=1010 0011 1111<sub>2</sub>
                </ul>

                <h4>Fractions / Hexadecimal Point</h4>
                    <p>When you have a “hex point” (analogous to decimal point), digits to the right have weights 16<sup>-1</sup>,16<sup>-2</sup>,…<p>
                <p><strong>Example:</strong> 4B.A7_16 :</p>
                <ul>
                    <li>4 × 16¹ = 4 × 16 = 64 </li>
                    <li>4 × 16¹ = 4 × 16 = 64 </li>
                    <li>A = 10 × 16⁻¹ = 10 × (1/16) = 10/16 = 0.625 </li>
                    <li>7 × 16⁻² = 7 × (1/256) ≈ 0.02734375</li>
                    <p>Sum: 64 + 11 + 0.625 + 0.02734375 = 75.65234375₁₀</p>
                </ul>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li><a href="Reference: https://byjus.com/maths/hexadecimal-number-system/" target="_blank">Reference: https://byjus.com/maths/hexadecimal-number-system/</a></li>
                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="{{ route('digilogic.mod7.practice') }}" class="action-button">Go to Practice</a>
                <a href="{{ route('digilogic.mod7.quiz') }}" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
