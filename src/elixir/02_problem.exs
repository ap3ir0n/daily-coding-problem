# Given an array of integers, return a new array such that each element
# at index i of the new array is the product.
#
# If our input was [3, 2, 1], the expected output would
# be [2, 3, 6].

defmodule ProblemTwo do
  def exec(input) do
    Enum.map(input, fn x -> Enum.reduce(input -- [x], 1, fn(y, acc) -> y * acc end) end)
  end
end