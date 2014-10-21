package main

//import "fmt"

func reverse(p []int, m int) {
	i:=1;
	j:=m;
	for i<j {
		p[i], p[j] = p[j], p[i]
		i++;
		j--;
	}
}

func antylex(p []int, m int) {
	if m == 1 {
		//fmt.Printf("%3d\n",p) // wypluwa kombinacje, do porowania czy alg dziala tak samo
	} else {
		for i := 1; i <= m; i++ {
			antylex( p, m-1);
			if i < m {
				p[i], p[m] = p[m], p[i]
				reverse( p, m-1);
			}
		}
	}
}

func main() {
    p := []int{0,1,2,3,4,5,6,7,8,9,10,11} // 11!
    n := len(p)-1;


    //fmt.Printf("%3d\n",p)
    antylex(p,n);
}