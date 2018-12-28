# Given a list of numbers and a number k, return whether any two numbers from the list add up to k.

Code.load_file("01_problem.exs", Path.join(["..", "..", "src", "elixir"]))

ExUnit.start()
ExUnit.configure(trace: true)

defmodule ProblemOneTest do
  use ExUnit.Case

  test "problem is solved" do
    assert ProblemOne.exec([10, 15, 3, 7], 17) == true
    assert ProblemOne.exec([10, 15, 3, 7], 25) == true
    assert ProblemOne.exec([10, 15, 3, 7], 26) == false
    assert ProblemOne.exec([10, 15, 3, 1], 6) == false
  end
end