library(tidyverse)
library(foreign)
library(lubridate)

## Read from file ./date-signatures-2023-04-19.csv to df_dates
df_dates <- read_csv("../storage/app/supporters/date-signatures.csv")

## Add cummulative number of signatures up to that date to df_dates
for (i in 1:nrow(df_dates)) {
    df_dates[i, "cumsum"] <- sum(df_dates[1:i, "signatures"])
}

## Plot the number of signatures per day as a bar graph and the cummulative number of signatures as a line
plot <- ggplot(df_dates, aes(x = date, y = signatures)) +
    geom_bar(stat = "identity", fill = "blue", show.legend = TRUE) +
    geom_line(aes(y = cumsum), color = "red", show.legend = TRUE) +
    labs(
        title = "Development of the number of signatures",
        x = "Date",
        y = "Number of signatures"
    ) +
    theme(plot.title = element_text(hjust = 0.5), legend.position = "bottom") +
    scale_fill_identity(name = "Test", guide = "legend", labels = c("m1"))

## Save the plot to a file named according to the current date
filename <- paste0("../public/plots/plot-", format(Sys.Date(), "%Y-%m-%d"), "_", format(Sys.time(), "%H-%M-%S"), ".png")
ggsave(plot, filename = filename, width = 10, height = 7.5, dpi = 300)
ggsave(plot, filename = "../public/plots/plot-latest.png", width = 10, height = 7.5, dpi = 300)
