# Given an array of integers, return a new array such that each element
# at index i of the new array is the product.
#
# If our input was [3, 2, 1], the expected output would
# be [2, 3, 6].

Code.load_file("02_problem.exs", Path.join(["..", "..", "src", "elixir"]))

ExUnit.start()
ExUnit.configure(trace: true)

defmodule ProblemTwoTest do
  use ExUnit.Case

  test "problem is solved" do
    assert ProblemTwo.exec([3, 2, 1]) == [2, 3, 6]
  end
end