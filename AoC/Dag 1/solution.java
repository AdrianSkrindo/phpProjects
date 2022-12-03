import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.stream.Collectors;

public class solution{

    public static void main(String[] args) throws IOException {

    List<Integer> elfs = Arrays.stream(
                    Files.readAllLines(Paths.get("dag1-input.txt"))
                            .stream()
                            .collect(Collectors.joining(","))
                            .split(",,"))
            .map(e -> Arrays.stream(e.split(","))
                    .mapToInt(Integer::parseInt).sum())
            .sorted(Comparator.reverseOrder())
            .collect(Collectors.toList());

                //Løsning 1
                System.out.println(elfs.get(0));

                //Løsning 2
                System.out.println(elfs.get(0)+ elfs.get(1) + elfs.get(2));
            }

}