# PHP Grade Checker Using Switch

## Introduction

This exercise demonstrates how PHP can be used to create a simple grade-checking program. 
The program stores a student's mark in a variable and uses a switch(true) 
control structure to evaluate the mark against different conditions.
Based on the student's mark, the program displays the appropriate grade, 
including Grade A, Grade B, Grade C, Grade D, or Fail.

## Screenshot 1

The first screenshot shows the beginning of the PHP program.
The student's mark is stored in the $mark variable, with the value set to 100. 
The program then starts a switch(true) statement, which allows different conditions to be evaluated. 
The first case checks whether the student's mark is between 90 and 100. 
If the condition is true, the echo statement displays 90 - 100 = Grade A, 
and the break statement stops the switch from continuing to the next cases.

## Screenshot 2

The second screenshot shows the remaining conditions of the program. 
The case statement checks whether the mark is between 70 and 79 and displays Grade C when the condition is true. 
The next case checks whether the mark is between 60 and 69 and displays Grade D. 
Finally, the default statement handles any mark that does not match the previous conditions and displays Below 60 = Fail. 
The && operator is used to make sure that both conditions in each grade range are true,
while break stops the switch after the correct condition has been found.

## Why I Use switch(true)?

switch(true) is used in this program because the program needs to evaluate multiple conditions based on
a range of values rather than compare one fixed value with individual values. 
Each case contains a condition that determines whether the student's mark belongs to a particular grade range. 
This makes the grade-checking logic organized and easy to read.
For example, case ($mark >= 70 && $mark < 80) checks whether the mark falls within the range for Grade C.
Using switch(true) provides a clear way to handle several related conditions in one control structure.

## Grade System

| Mark Range | Grade |
|---|---|
| 90 - 100 | Grade A |
| 80 - 89 | Grade B |
| 70 - 79 | Grade C |
| 60 - 69 | Grade D |
| Below 60 | Fail |

## Concepts Demonstrated

This exercise demonstrates several important PHP concepts, 
including variables, switch(true), case, default, break, echo, 
comparison operators, logical AND (&&), and conditional expressions.
It also demonstrates how control structures can be used to create a 
practical grade classification system.
