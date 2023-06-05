from timeit import default_timer as timer
start=timer()
def logarithms(n):
    i = 1
    while i <= n : 
         i = i * 2
         print(i)
logarithms(1000000000000)
end=timer()
delay=end-start
print(f">time {delay}")
