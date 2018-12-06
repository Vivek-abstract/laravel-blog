# Introduction
The N Queen Problem is the typical Computer Science university problem for any algorithm course. You have to arrange N Queens on an NxN chessboard such that they don't attack each other. It can typically be solved using Backtracking but in this post, I'm gonna solve it using Hill Climbing Search.

## Hill Climbing Search
The Hill Climbing Search has a simple motto:
Given the current state, how can I improve this state just by looking at my neighboring states?
Mr. Peter Norvig has given an excellent explanation of hill climbing search:
> "It's like climbing Mt Everest on a foggy day and you have amnesia"

## Successor States
The hill climbing algorithm first finds all the successor states of a particular state and assigns a heuristic to it. In our problem, it moves every queen to some other position in the same column. This results in 7*8 = 56 successor states for a particular position.

## Heuristic Function
How do we decide if a position is better than another position? We use a heuristic: How many pairs of queens are attacking each other either directly or indirectly? 
For the solution, h = 0 as no queen must attack any other queen. We calculate this value of h for each of the 56 states and choose the state with the minimum h value.

![Heuristic Value](https://i.imgur.com/bqqre25.jpg)

The figure a has a value h=17 and figure b has h=1.

## Sideway moves
The Hill Climbing  approach is known to reach dead ends on local maxima's as shown in the figure:

![Hill Climbing disadvantages](https://i.imgur.com/eQXYqD9.jpg)

When it gets stuck on a local maxima which is a shoulder (i.e. upward progress is possible), we decide to go sideways. That is, we choose the state whose heuristic value (h)  is the same as the current state's heuristic value. To avoid going into an infinite loop, we choose a limit for sideway moves. In my implementation, I've kept it as 100.

## Analysis
Without sideway moves, the Hill Climbing search can only solve 14% of problems successfully. With sideway moves, it can solve 94% of problems successfully. However, it requires more steps to arrive at the solution.

## Sample Run
You can view the entire code for the problem [here.](https://gist.github.com/Vivek-abstract/e82d8b6de3d4439d3c4f54501e23ac61)
I give the following input to the program:

![Input](https://i.imgur.com/lwOr9wL.png)

Which is the position in figure a above. I get the following image as output:

![Output](https://i.imgur.com/9ZsOumv.jpg)

## Conclusion
When I started studying Hill Climbing, I didn't believe that it could find the solution in 3-4 steps. But when I actually implemented it, I realized that it actually works and is surprisingly quick even though my implementation is not that efficient.