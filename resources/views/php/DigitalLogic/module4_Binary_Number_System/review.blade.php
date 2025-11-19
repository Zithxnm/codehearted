<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Review | CodeHearted</title>
    <meta name="description" content="Lesson 4: Control Flow and Conditional Logic">
    @vite('resources/css/modules/digilogic/mod4/review4.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 4: The Binary Number System</h1>
            <p>The binary number system (base-2) is a positional numeral system that uses only two symbols: 0 and 1. This system is fundamental to digital electronics, computing, and logical operations because it maps directly to two‐state devices (on/off, true/false). Every binary digit is called a bit. Multiple bits can be grouped (e.g. bytes = 8 bits) to represent larger values.
                Computers use binary for storage, processing, and transmission of data. Every instruction, value, text, or media is ultimately encoded in binary.</p>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students will be able to:</p>
                <ul>
                    <li>Define what the binary number system is (base-2), what bits are, and why binary is used in computing.</li>
                    <li>Read and write binary numbers.</li>
                    <li>Convert binary numbers to decimal.</li>
                    <li>Convert decimal numbers to binary through successive division by 2.</li>
                    <li>Perform basic arithmetic operations (addition, subtraction) in binary.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <ul>
                    <li>Terms & definitions: bit, byte, base, positional notation</li>
                    <li>How positional value works in binary (powers of 2) </li>
                    <li>Rules for converting between binary and decimal</li>
                    <li>Binary arithmetic basics (especially binary addition)</li>
                    <li>Examples to illustrate conversions and arithmetic</li>
                    <li>Tools if available: calculator that supports binary or worksheets</li>

                    <h3>Detailed Explanations & Examples</h3>
                    <p><strong>What is Binary?</strong></p>
                    <ul>
                        <li>Binary is a way of writing numbers using only two digits: 0 and 1. </li>
                        <li>It is a positional system, meaning each position has a value (a power of 2) depending on its place in the sequence of bits. </li>
                        <li>Example: in binary the rightmost bit is 2⁰, the next left is 2¹, then 2², etc. </li>
                    </ul>

                    <p><strong>Reading Binary to Decimal</strong> <br>To convert a binary number to decimal:</p>

                    <p>1. Write down the binary number, label its positions with powers of two, starting from 0 on the right.</p>
                    <p>2. Multiply each bit by its place value (power of 2).</p>
                    <p>3. Sum the results.</p>

                    <p><strong>Example</strong> Convert 1011₂ to decimal:</p>


                    <h2>Learning Materials</h2>
                    <p>Definitions and behavior of logical connectives:</p>
                    <table>
                        <tr>
                            <th>Binary Digit (bit)</th>
                            <th>Position (power of 2)</th>
                            <th>Value Contribution</th>
                        </tr>
                        <tr>
                            <td>1 (leftmost)</td>
                            <td>2² = 4</td>
                            <td>0 × 4 = 0</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2¹ = 2</td>
                            <td>1 × 2 = 2</td>
                        </tr>
                        <tr>
                            <td>1 (rightmost)</td>
                            <td>2⁰ = 1</td>
                            <td>1 × 1 = 1</td>
                    </table>

                    <p>Sum: 8 + 0 + 2 + 1 = 11₁₀ <br> So 1011₂ = 11₁₀.</p>

                    <h3>Converting Decimal to Binary</h3>
                    <p>To convert a decimal number to binary:
                    <p>
                    <ul>
                        <li>Repeatedly divide the number by 2.</li>
                        <li>Record the remainder at each division (it will be 0 or 1). </li>
                        <li>Continue until the quotient is 0. </li>
                        <li>The binary number is the sequence of remainders read from bottom (last) to top (first). </li>
                    </ul>

                    <p><strong>Example:</strong> Convert 13₁₀ to binary:</p>

                    <table>
                        <tr>
                            <th>Step</th>
                            <th>Decimal<br>Number/<br>Quotient</th>
                            <th>Divide by 2</th>
                            <th>Quotient</th>
                            <th>Remainder</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>13</td>
                            <td>13 ÷ 2 = 6</td>
                            <td>6</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>6</td>
                            <td>6 ÷ 2 = 3</td>
                            <td>3</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3</td>
                            <td>3 ÷ 2 = 1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1</td>
                            <td>1 ÷ 2 = 0</td>
                            <td>0</td>
                            <td>1</td>
                    </table>

                    <p>Reading remainders bottom to top: 1101₂. So, 13₁₀ = 1101₂.</p>

                    <h3>Binary Arithmetic: Addition</h3>
                    <p>Binary addition follows similar rules to decimal addition, but using base-2:</p>
                    <table>
                        <tr>
                            <th>Rule</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>0 + 0 = 0</td>
                            <td>both bits 0 gives result 0, carry 0</td>
                        </tr>
                        <tr>
                            <td>20 + 1 = 1 or 1 + 0 = 1</td>
                            <td>one “1” gives 1, carry 0</td>
                        </tr>
                        <tr>
                            <td>1 + 1 = 10₂</td>
                            <td>which is 0 with carry 1</td>
                        </tr>
                        <tr>
                            <td>1 + 1 + 1 = 11₂</td>
                            <td>(if there was a carry) results in 1 with carry 1</td>
                    </table>
                    <p><strong>Example:</strong> Add <strong>1011₂ + 1101₂</strong></p>
                    <p>&nbsp;&nbsp;1011<br>+1101<br>-------</p>

                    <p>Compute from rightmost bit:</p>
                    <ul>
                        <li>1 + 1 = 10₂ → write 0, carry 1</li>
                        <li>Next: 1 + 0 + carry 1 = 10₂ → write 0, carry 1</li>
                        <li>Next: 0 + 1 + carry 1 = 10₂ → write 0, carry 1</li>
                        <li>Last: 1 + 1 (from leftmost bits) + carry 1 = 11₂ → write 1, carry 1 to a new bit</li>
                        <p>Result: <strong>11000₂<strong> <br>So <strong>1011₂ + 1101₂ = 11000₂.<strong></p>
                    </ul>




                    <h3>Why Binary in Computing</h3>
                    <ul>
                        <li> Binary is used because electronic circuits have two easily distinguishable states (off/on, low/high voltage).</li>
                        <li> It simplifies storage, transmission, and logic operations.</li>
                        <li> Bits grouped into bytes (8 bits) and larger units allow encoding of numbers, characters </li>
                        <li> It simplifies storage, transmission, and logic operations. (via ASCII or Unicode), images, etc.</li>
                    </ul>


                    <!-- References -->
                    <section class="references">
                        <h2>📚 References</h2>
                        <ul>
                            <li><a href="https://www.computerhope.com/jargon/b/binary.htm" target="_blank">https://www.computerhope.com/jargon/b/binary.htm</a></li>
                    </section>

                    <!-- Navigation Buttons -->
                    <div class="lesson-nav">
                        <a href="practice.php?module=4" class="action-button">Go to Practice</a>
                        <a href="quiz.php?module=4" class="action-button" style="margin-left:8px;">Take Quiz</a>
                    </div>
        </div>
    </main>
</body>

</html>
