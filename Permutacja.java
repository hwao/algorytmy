import java.util.Arrays;

public class Permutacja {
    protected static void swap(int[] a, int i, int j) {
        int t = a[i];
        a[i] = a[j];
        a[j] = t;
    }

    protected static void reverse(int[] p, int m) {
        int i = 1;
        int j = m;
        while (i < j) {
            swap(p,i,j);
            i++;
            j--;
        }
    }

    protected static void antylex( int[] p, int m ) {
        if( m == 1) {
            //System.out.println(Arrays.toString(p));
        } else {
            for(int i=1; i <= m; i++ ) {
                antylex(p, m-1);
                if( i < m ) {
                    swap( p, i,m );
                    reverse(p, m-1);
                }
            }
        }
    }

    public static void main(String[] args) {
        int n = Integer.parseInt(args[0]);

        int[] p = new int[n+1];
        for( int i=1; i <= n; i++ ) {
            p[i] = i;
        }

        //System.out.println(Arrays.toString(p));

        antylex(p, n);
    }
}