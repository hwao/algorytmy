def reverse(p,m):
    i = 1
    j = m
    while i < j:
        p[i], p[j] = p[j], p[i]
        i += 1
        j -= 1

def antylex( p,m ):
    if m == 1:
        m
        #print p
    else:
        for i in range( 1, m+1):
            antylex( p, m-1)
            if i < m:
                p[i], p[m] = p[m], p[i]
                reverse( p, m-1)
            i+=1


n = 11;
p = [0];
for i in range(1,n+1):
    p.append(i)

#print p
antylex(p, n )
