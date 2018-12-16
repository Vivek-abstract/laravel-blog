Beautiful code
I wish they taught this at college

Introduction
It's vacation time! The 7th semester just came to an end and that leaves me with only one final semester before I become an
official Computer Engineer. Most of you may start working on your Final Year project now. That's why I decided to write this
article.

Why do we code?
The answer is simple: to solve problems.
As with most problems, we may not know how to solve them on our own - so we seek help.
Most of our projects would require some amount of collaboration with other engineers.
Today I'd be talking about how to write readable and understandable code.

What is readable code?

If you send over a piece of code to your teammate and he has to call you in order to understand it, you're not writing good code.
Code should be able to explain itself. Programming is no longer about writing a program for the computer to understand, its about
writing a program that others can understand - the fact that computers can understand it is just a side quest.

In our education system, if a program you wrote works, you get full marks for it. I believe that this is what creates bad habbits
among beginner developers.

"Just because it works - doesn't mean you should leave it as it is"

There's a term called Technical Debt - which simply means that everything you're taking for granted in your project, be it quick fixes,
highly complex code, etc, will come back to haunt you when you add new features to your project. Technical debt is what you pay
in terms of your time wasted in fixing the past bugs, just so you could develop a new feature without breaking the entire project.

Now I can hear you saying - "How bad can it be? It's not like I'd waste hours fixing my old code"

I'm no expert but I do know the difference between good code and bad code. Here's an example to demonstrate it:

def f(a):
  if a == 0 or a == 1:
    return 1
  return a * f(a-1)

def comb(a, b):
  return (f(a) * f(b)) / f(a-b)

Can you tell what the function is doing? Now compare it with this:

def fact(n):
  # Returns the factorial of n
  if n == 0 or n == 1:
    return 1
  else:  
    return n * fact(n-1)

def nCr(n, r):
  # Returns the value of nCr
  return (fact(n) * fact(r)) / fact(n-r)

Can you see the difference in the amount of time it takes to understand the two pieces of code? In the first example,
there are no comments, weird function names, weird parameter names, etc. In the second example, you
can easily tell what each function is doing by looking at the comments, the parameters match with the
mathematical formula (n,r) as well.

How to write better code

Here are some techniques I have found at writing readable code:
1. Good Variable Names:
I can't stress on this point enough. Variables are the soul of any program. They should be named after
their purpose. What does this variable store? Don't insult it by just slapping any letter for a variable name
[Robot]

Don't get me wrong, there are times where a single letter variable name is acceptable for eg: when it corresponds
 to a mathematical formula (as shown in the nCr example above). Besides that, you should avoid using single letter names.
Boolean variables should be named as verbs. for ex: isFetching = True
Then you can use them inside conditionals as so:
if (isFetching):
  # Do something

if (! isFetching):
  # Do something

This almost reads as an English sentence.

2. Comments:
Explaining your code verbally to your teammate is easy and simple. Why do we need comments?
The flaw in this type of thinking is assuming that you're always available. In a real life situation,
you may be in a meeting and your teammate is assigned to develop a critical feature which builds upon
something you developed.
Another issue is when the project grows into a huge codebase and you have a junior developer who just
joined the company. You can't explain the entire codebase line by line to every developer who's gonna
look at your code. 
That's why, you write comments. Write comments wherever you think that some explanation is needed. A
common place to write comments is at the start of each function to describe what it does and what kind of arguments
it expects.

3. Indentation:
There is a sir in my college who taught me the importance of indentation. He would scold anyone who didn't indent his code.
Thanks to him, I learnt to always indent my code - right from the first year. What's indentation? Indentation is the empty space you
put in your code to highlight the structure of the code. Whatever is inside a function/loop should be indented.
Have a look at these two examples:
for(i = 0; i < N; i++)
{
for(j = 0; j < N; j++)
{
ans = i + j;
printf("%d", ans);
}
}

You can't tell where each loop is beginning, where it's ending, and how much of the code belongs to each loop. Compare it with:
for(i = 0; i < N; i++)
{
    for(j = 0; j< N; j++) 
    {
        ans = i + j;
        printf("%d", ans);
    }
}

Isn't that a whole lot better? 
Pro tip: Indentation is the easiest to do amongst all the other tips. If you use a text editor like VSCode -
which I highly recommend using for basically everything, you can indent your code with a simple shortcut: Ctrl+Shift+I (for Linux)
Even when you copy and paste code from Stack Overflow, just press Ctrl+Shift+I and VSCode will format it for you.

Conclusion:
As you work on your Final year project - ask yourself this question:
"Is this code worth someone paying me for it?". If the answer is no, you need to start thinking about refactoring your code.
As this is our last year, and we're gonna be at our new jobs soon, someone is going to be paying you to write code. 
Make sure you keep that in mind and write some quality code.
Hope you learnt something new. If you'd like to recommend an article, let me know in the comments below.