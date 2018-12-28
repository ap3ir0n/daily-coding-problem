# Given a list of numbers and a number k, return whether any two numbers from the list add up to k.

defmodule ProblemOne do
  def exec(numbers, k) do
    Enum.any?(numbers, fn(i) -> Enum.any?(numbers -- [i], fn(j) -> k == i + j end) end)
  end
end
